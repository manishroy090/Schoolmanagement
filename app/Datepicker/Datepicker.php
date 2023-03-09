<?php
namespace App\Datepicker;

use Nilambar\NepaliDate\NepaliDate;


class Datepicker{
    
  public $year;
  public $month;
  public $day;
  public $result;
    public function currentDate($d=null){
        $this->year = date("Y",$d);
        $this->month = date("m",$d);
        $this->day = date("d",$d); 
    }
    public function dateValue($staring,$ending=null){
        $this->result=array($staring,$ending);
    }
 
    public function certainDate($date,){
        $obj = new NepaliDate();
        switch ($date) {
            case 'Today':
              $this->currentDate();
               $staring=$obj->convertAdToBs($this->year, $this->month, $this->day);  
               $this->dateValue($staring);
              
                break;
            case 'Yesterday':
               $this->currentDate(strtotime('Yesterday'));
               $staring= $obj->convertAdToBs($this->year, $this->month, $this->day);
               $this->dateValue($staring);

                break;
            case 'Last Week';
                $this->currentDate(strtotime('sunday -2 Week'));
                $staring=$obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->currentDate(strtotime('saturday -1 Week'));
                $ending=$obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->dateValue($staring,$ending);
                break;
            case 'Current Week':
                ;
                $this->currentDate(strtotime('sunday -1 Week'));
                $staring = $obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->currentDate(strtotime('saturday 0 Week'));
                $ending = $obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->dateValue($staring,$ending);
                break;
            case 'Current Month':
                ;
                $this->currentDate(strtotime('monday -3 Week'));
                $staring = $obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->currentDate(strtotime('tuesday 1 Week'));
                $ending = $obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->dateValue($staring,$ending);
                break;
            case 'Last Month';
                $this->currentDate(strtotime('sunday -3 Week last month'));
                $staring = $obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->currentDate(strtotime('sunday 1 Week last month'));
                $ending = $obj->convertAdToBs($this->year, $this->month, $this->day);
                $this->dateValue($staring,$ending);
                break;
        }
        return $this->result;
    }
   
}
?>