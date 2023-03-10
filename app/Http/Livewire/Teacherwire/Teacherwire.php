<?php

namespace App\Http\Livewire\Teacherwire;

use Livewire\Component;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;

class Teacherwire extends Component
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
        $this->details=Teacher::all();
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
    Teacher::create($data);
     $this->getData();
     session()->flash('message','Teacher Added Success');
    $this->dispatchBrowserEvent('hide-modal');
    $this->dispatchBrowserEvent('show-alert',['msg'=>'Added! Teacher']);
     return redirect()->back();
  
    }
    public function edit(Teacher $detail){
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
        Teacher::find($this->teacher->id)->update($data);
    $this->getData();
    $this->dispatchBrowserEvent('hide-modal');
    $this->dispatchBrowserEvent('show-alert',['msg'=>'Updated! Teacher']);
      
    }
    public function trash($id){
       
       $delete= Teacher::find($id)->delete();
       $this->getData();
       if($delete){
        $this->dispatchBrowserEvent('show-alert',['msg'=>'Deleted! Teacher']);

       }
    }
    public function render()
    {
        return view('livewire.teacherwire.teacherwire');
    }
}
?>
