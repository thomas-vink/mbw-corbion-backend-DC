<?php
namespace App\Classes;
use Illuminate\Support\Facades\Log;
use App\ShiftTimes;
use DateTime;



class ShiftChecker
{
    public $Start1;
    public $End1;
    public $Start2;
    public $End2;
    public $Start3;
    public $End3;

    public function __construct()
    {
        $times = ShiftTimes::all();
        $this->Start1 = strtotime($times[0]->timeEnd);
        $this->End1 = $times[0]->timeStart;
        $this->Start2 = $times[1]->timeStart;
        $this->End2 = $times[1]->timeStart;
        $this->Start3 = $times[2]->timeStart;
        $this->End3 = $times[2]->timeStart;
    }

    public function getShift()
    {
        $sunset = "06:15:00";
        
        if ($date1 > $this->Start1 && $date1 < $this->End1)
        {
            dd("dit is 1 van".$this->Start1."tot".$this->End1);
        }
        else if ($date1 > $this->Start2 && $date1 < $this->End2)
        {
            dd("dit is 2 van".$this->Start2."tot".$this->End2);
        }
        else if ($date1 > $this->Start3&& $date1 < $this->End3)
        {
            dd("dit is 3 van".$this->Start3."tot".$this->End3);
        }
        else{
        }
    }
}