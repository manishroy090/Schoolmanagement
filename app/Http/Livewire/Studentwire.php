<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Studentwire extends Component
{
    public $state=[];
    public  $students;
    public function showmodal(){
       $this->dispatchBrowserEvent('show-model');
    }
    public function getdata(){
       $this->students= Student::all();
    }
    public function mount(){
        $this->getdata();
    }
    
    public function addstudent(){
        $data=validator::make($this->state,[
        'name'=>'required|alpha|max:15|min:8',
        'email'=>'required|unique:studens',
        'address'=>'required|max:15',
        'class'=>'required',
        'number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'section'=>'required' ,
        'gender'=>'required',
        'dob'=>'required|date|date_format:Y-m-d',
        'fathername'=>'required|max:15|min:8',
        'mothername'=>'required|max:15|min:8',
        'addmissiondate'=>'required|date|date_format:Y-m-d',
        'religion'=>'required'
        ])->validate();
      
  
        Student::create($data);
        $this->getdata();
        $this->dispatchBrowserEvent('hide-model',["msg"=>"Student added Success"]);
        
       
    }
    public function render()
    {
        return view('livewire.studentwire');
    }
}
?>
