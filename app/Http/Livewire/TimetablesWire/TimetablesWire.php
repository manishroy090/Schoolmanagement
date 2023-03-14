<?php

namespace App\Http\Livewire\TimetablesWire;

use Livewire\Component;
use App\Models\Manage;
use App\Models\Teacher;

class TimetablesWire extends Component
{
    public $classes;
    public $periods;
    public $teachers;
   public $state=[];
   
    public function getData(){
        $this->periods=Manage::where('category','period')->get();
        $this->classes=Manage::where('category','class')->get();
        $this->teachers=Teacher::all();
    }
    public function makeTime($start,$end){
        $starting=date("h:i:sa", $start);
        $ending=date("h:i:sa", $end);
        $this->state['start']=$starting;
        $this->state['end']=$ending;
    }
    public function setTime($startinp,$endinp){

    }
  
    public function updated(){
        $date=$this->state['period'];
        switch ($date) {
            case '57':
                $this->makeTime(strtotime("9:30am"),strtotime("10:00am"));
                break;
            case '58':
                $this->makeTime(strtotime("10:00am"),strtotime("10:45am"));
                break;
                case '59':
                    $this->makeTime(strtotime("10:45am"),strtotime("11:15am"));
                    break;
                case '60':
                    $this->makeTime(strtotime("11:45am"),strtotime("12:15am"));
                    break;
                case '61':
                    $this->makeTime(strtotime("12:15am"),strtotime("1:45am"));
                    break;
                case '62';
                $this->makeTime(strtotime("1:45am"),strtotime("2:15am"));
                break;
                case '63';
                $this->makeTime(strtotime("2:45am"),strtotime("3:15am"));
                break;
                case '64';
                $this->makeTime(strtotime("3:15am"),strtotime("4:15am"));
                break;
            default:
                # code...
                break;
        }
        

    }
    public function mount(){
        $this->getData();
    }
    public function jon(){

    }
       
    public function render()
    {
        return view('livewire.timetables-wire.timetables-wire');
    }
}
