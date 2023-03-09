<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Datepicker\Datepicker as Da;
use Nilambar\NepaliDate\NepaliDate;

class Datepicker extends Component
{
    public $date;
    public $ending;
    public $started;
    public $year;
    public $month;
    public $day;

    public function updated()
    { 
        $datepicker= new Da();
        $date = $this->date;
        
        $datepicker->certainDate($date);
        
        if($date=='Today' || $date=='Yesterday' ){
            $this->started=$datepicker->result[0]['year']. "/" . $datepicker->result[0]['month'] . "/" . $datepicker->result[0]['day'];
            $this->ending=$datepicker->result[0]['year']. "/" . $datepicker->result[0]['month'] . "/" . $datepicker->result[0]['day'];
        }else if($date=='Custom date'){
            $this->started='';
            $this->ending='';
        }
        else{
            $this->started=$datepicker->result[0]['year']. "/" . $datepicker->result[0]['month'] . "/" . $datepicker->result[0]['day'];
            $this->ending=$datepicker->result[1]['year']. "/" . $datepicker->result[1]['month'] . "/" . $datepicker->result[1]['day'];

        }

    }
    public function render()
    {
        return view('livewire.datepicker');
    }
}

?>