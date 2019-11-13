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
    //removes semicollen from data 
    public static function splicer($request)
    {
        $count = 0;
        $scannedPoints;
        foreach($request->input() as $row)
        {
            $exploded = explode(',', $row);
            $scannedPoints[$count] = array( 
                'barcode'  =>  substr($exploded[0],1,-1),
                'time'  =>  substr($exploded[1],2,-1),
                'date' => substr( $exploded[2],1,-1),
             );
            $count++;
        }
        Log::info($request); 
        Log::info($scannedPoints);
        return $scannedPoints;  
    }

    //check if employee code exists
    public function checkEmployee($data)
    {

        foreach($data as $scannedcode)
        {
           $code= substr($scannedcode['barcode'] ,-5,1);
           if($code === "E")
           {
               $id = Employee::findOrFail(1);
               $id = Employee::where('employeecode',  $scannedcode['barcode'])->firstOrFail();
               unset($scannedcode);
               return($id);
           }
           else
           {
            $this->msg('hello world');

           }
        }

    }

    //checks barcodes if they exist if exists returns id 
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

    public function ScanroundBuilder($data)
    {
        $employee = $this->checkEmployee($data);
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
            if($scannedPoint['scanpoint_id'] == null)
            { 
            }
            else{
                $scanned = new Scannedpoint;
                $scanned->scanned_time = $scannedPoint['time'];
                $scanned->scanned_at = date("Y-m-d");
                $scanned->scanround_id = 4;
                $scanned->operator_id =  $scannedPoint['employee_id'];
                $scanned->Scanpoint_id = $scannedPoint['scanpoint_id'];
                $scanned->save();
            }
        }
    }





    public function msg()
    {
        return response('hello world');
    }

}