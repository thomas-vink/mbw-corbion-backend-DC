<?php
namespace App\Classes;
use Illuminate\Support\Facades\Log;
use App\ShiftTimes;
use App\Scanpoint;
use App\ScannedPoint;
use App\ScanRound;
use App\Employee;

class RoundChecker
{
    function __construct() {

    }
    
    public static function splicer($request)
    {
        $count = 0;
        $scannedPoints;

        foreach($request->input() as $row)
        {
            $exploded = explode(',', $row);
            $scannedPoints[$count] = array( 
                'barcode'  => $exploded[0],
                'time'  =>  substr($exploded[1],2,-1),
                'date' => substr( $exploded[2],1,-1),
             );
            $count++;
        }
        return $scannedPoints;  
    }

    public function ScanroundBuilder($data)
    {
        $employee = $this->findEmployee($data);
        $count = 0;
        foreach($data as $scanpoint)
        {
            $scannedPoints[$count] = array( 
                'barcode'  => $scanpoint['barcode'],
                'time'  => $scanpoint['time'],
                'date' => $scanpoint['date'],
                'scanpoint_id' => $this->getPointID($scanpoint['barcode']),
                'employee_id' => $employee->id,
             );
            $count++;
        }
        $this->putDatabase($scannedPoints);
    }
    public function putDatabase($scannedPoints)
    {
        foreach($scannedPoints as $scannedPoint)
        {
            $test = 
            log::info($scannedPoint['scanpoint_id']);
            if($scannedPoint['scanpoint_id'] == null)
            { 
                log::info('dit is de e code');
            }
            else{
                $scanned = new Scannedpoint;
                $scanned->scanned_time = $scannedPoint['time'];
                $scanned->scanround_id = 3;
                $scanned->operator_id =  $scannedPoint['employee_id'];
                $scanned->Scanpoint_id = $scannedPoint['scanpoint_id'];
                $scanned->save();
            }
        }
    }

    public function findEmployee($data)
    {
        foreach($data as $scannedcode)
        {
           $code= substr($scannedcode['barcode'] ,-5,1);
           if($code === "E"){
               $id = Employee::findOrFail(1);
               $id = Employee::where('employeecode',  $scannedcode['barcode'])->firstOrFail();
               unset($scannedcode);
               return($id);
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


}