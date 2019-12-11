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

    public $msg;

    //removes semicollen from data 
    public function splicer($request)
    {
        log::info($request);
        $counter = 0;
        $scannedPoints = [];
        foreach($request->input() as $row)
        {
            $exploded = explode(',', $row);
            $scannedPoints[$counter] = array( 
                'barcode'  =>  substr($exploded[0],1,-1),
                'time'  =>  substr($exploded[1],2,-1),
                'date' => substr( $exploded[2],1,-1),
             );
            $counter++;
        }
        return $scannedPoints;  
    }

    //check if employee code exists
    public function checkEmployee($data)
    {
        foreach($data as $scannedcode)
        {
        $employeeID;
           $code= substr($scannedcode['barcode'] ,-5,1);
            if($code === "E")
            {
                $id = Employee::findOrFail(1);
                $id = Employee::where('employeecode',  $scannedcode['barcode'])->firstOrFail();
                unset($scannedcode);
                $employeeID = $id;
                break;
            }
        }
        if(isset($employeeID))
        {
            return($employeeID);
        }
        else
        {
            $this->msg = "'error user not found',417";
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

        // in case of an error ealier, do not execute this block.
        if(!isset($this->msg))
        {
            $counter = 0;
            $scannedPoints = [];
            foreach($data as $scanpoint)
            {
                $scannedPoints[$counter] = array( 
                    'barcode'  => $scanpoint['barcode'],
                    'time'  => $scanpoint['time'],
                    'date' => $scanpoint['date'],
                    'scanpoint_id' => $this->getPointID($scanpoint['barcode']),
                    'employee_id' => $employee->id,
                );
                $counter++;
            }
            $this->putDatabase($scannedPoints);
        }
    }

    
    public function putDatabase($scannedPoints)
    {
        foreach($scannedPoints as $scannedPoint)
        {
            if($scannedPoint['scanpoint_id'] == null)
            { 
                $this->msg = "'No scanpoints detected',417";
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
    
    public function getResultMsg()
    {
        if (isset($this->msg))
        {
            return($this->msg);
        }
        else
        {
            return("'succes',200");
        }

    }

}