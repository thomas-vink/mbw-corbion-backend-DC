<?php
namespace App\Classes;
use Illuminate\Support\Facades\Log;
use App\ShiftTimes;
use App\Scanpoint;
use App\ScannedPoint;
use App\ScanRound;
use App\Employee;
use App\Classes\ShiftChecker;


class RoundChecker
{
    private $today;

    function __construct() {
        date_default_timezone_set("Europe/Amsterdam");

        $this->now = date("Y-m-d H:i:s");
        $this->today = date("Y-m-d");
        $this->rounds = ScanRound::all();

        $this->startTimes = [
            '0' => date("Y-m-d 22:00:00", strtotime("yesterday")),
            '1' => date("Y-m-d 02:00:00"),
            '2' => date("Y-m-d 06:00:00"),
            '3' => date("Y-m-d 10:00:00"),
            '4' => date("Y-m-d 14:00:00"),
            '5' => date("Y-m-d 18:00:00"),
        ];
        $this->endTimes = [
            '0' => date("Y-m-d 01:59:59"),
            '1' => date("Y-m-d 05:59:59"),
            '2' => date("Y-m-d 09:59:59"),
            '3' => date("Y-m-d 13:59:59"),
            '4' => date("Y-m-d 17:59:59"),
            '5' => date("Y-m-d 21:59:59"),
        ];
    }

    public static function splicer($request)
    {
        $count = 0;
        $scannedPoints;

        foreach($request->input() as $row)
        {
            $exploded = explode(',', $row);
            $scannedPoints[$count] = array( 
                'barcode'  => substr($exploded[0],1),
                'time'  =>  substr($exploded[1],2,-3),
                'date' => substr( $exploded[2],2,-3),
             );
            $count++;
        }
        return $scannedPoints;  
    }

    public function putDatabase($scanPoints)
    {
        foreach($scanPoints as $scanPoint)
        {
            $scanpointId = $this->getPointID($scanPoint['barcode']);
            if (isset($scanpointId))
            {
                $name = new Scannedpoint;
                $name->scanned_at = $scanPoint['time'];
                $name->scanround_id = 1;
                $name->operator_id = 1;
                $name->Scanpoint_id = $scanpointId;
                $name->save();
            }
            else
            {
                return("onbekende barcode");
            }
        }
    }

    public function getPointID($barcode)
    {
        foreach(Scanpoint::all() as $Scanpoint)
        {
            if($barcode == $Scanpoint->barcode)
            {
                return($Scanpoint->id);
            }
        }
    }

    public function createRound()
    {
        $round = 1;
        $count = 0;
        foreach($this->startTimes as $startTime){
            if($this->now > $startTime && $this->now < $this->endTimes[$count]){
                $scanRound = ScanRound::firstOrCreate([
                    "day" => $this->today,
                    "round" => $round,
                ],[
                    "start" => $startTime,
                    "end" => $this->endTimes[$count],
                    "shifttime_id" => $round,
                ]);
                return $scanRound->id;
            }
            $count++;
            $round++;
        }
    }

    public function exportToCsv($request)
    {
        $count = 0;
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $scanRounds = $this->rounds->whereBetween("day", [$startDate, $endDate] );

        foreach($scanRounds as $scanRound){
            $scannedPoints = ScannedPoint::where('scanround_id', $scanRound->id)->get();
            foreach($scannedPoints as $scannedPoint){
                $employee = Employee::find($scannedPoint->operator_id);
                $scanPoint = Scanpoint::find($scannedPoint->Scanpoint_id);
                $scannedRounds[$count] = array(
                    "day" => $scanRound->day,
                    "operator" => $employee->name,
                    "scanpoint" => $scanPoint->location,
                    "scantime" => $scannedPoint->scanned_time,
                );
            }
            $count++;
        }

        $fp = fopen('Export '.$this->today.' '.$startDate.' '.$endDate.'.csv', 'w');

        foreach($scannedRounds as $round){
            fputcsv($fp, $round);
        }
        fclose($fp);

        return redirect('/scanround')->with('success', 'Exporteren is gelukt!');
    }
}