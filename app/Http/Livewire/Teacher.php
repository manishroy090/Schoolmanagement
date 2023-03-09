<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher as Te;
use Illuminate\Support\Facades\Validator;

class Teacher extends Component
{
  public $state=[];
  public $showeditmodal=false;
  public $details;
  public $teacher;
    public function mount(){
        $this->getData();
    }

    public function add(){
        $this->showeditmodal=false;
        $this->dispatchBrowserEvent('show-modal'); 
    }
    public function getData(){
        $this->details=Te::all();
    }
    public function createTeacher(){
     $data= validator::make($this->state,[ 
        'name'=>"required|alpha",
        'email'=>'required|unique:teachers',
        'address'=>'required',
        'period'=>'required',
        'number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'salary'=>'required'

    ])->validate();
     Te::create($data);
     $this->getData();
     session()->flash('message','Teacher Added Success');
    $this->dispatchBrowserEvent('hide-modal');
     return redirect()->back();
  
    }
    public function edit(Te $detail){
        $this->dispatchBrowserEvent('show-modal');
        $this->state=$detail->toArray();
        $this->showeditmodal=true;
        $this->teacher=$detail;
    }
    public function updateTeacher(){
        $data= validator::make($this->state,[ 
            'name'=>"required|alpha",
            'email'=>'required|email|unique:teachers,email,'.$this->teacher->id,
            'address'=>'required',
            'period'=>'required',
            'number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'salary'=>'required'
    
        ])->validate();
    Te::find($this->teacher->id)->update($data);
    $this->getData();
    $this->dispatchBrowserEvent('hide-modal');
      
    }
    public function trash($id){
       
       $delete= Te::find($id)->delete();
       $this->getData();
       if($delete){
        $this->dispatchBrowserEvent('show-alert',['delet'=>'false']);

       }
    
      
     
    }
    public function render()
    {
        return view('livewire.teacher');
    }
}
?>
