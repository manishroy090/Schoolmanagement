<?php

namespace App\Http\Livewire\Examwire;

use Livewire\Component;

class Examwire extends Component
{   protected $listeners=['setDate'];
    public  $state=[];
   
    public function setDate($date){
     $this->state['date']=$date;
    
    }
    
   
    public function addExam(){
        dd($this->state);
    }
    public function render()
    {
        return view('livewire.examwire.examwire');
    }
}
?>
