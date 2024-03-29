<?php
namespace App\Classes;
use Illuminate\Support\Facades\Log;
use App\ShiftTimes;
use App\Scanpoint;
use App\ScannedPoint;
use App\ScanRound;



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


}