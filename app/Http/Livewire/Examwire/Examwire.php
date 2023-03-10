<?php

namespace App\Http\Livewire\Examwire;

use Livewire\Component;
use App\Models\Manage;
use App\Models\Exam;
use Illuminate\Support\Facades\Validator;

class Examwire extends Component
{   protected $listeners=['setDate','setime'];
    public  $state=[];
    public $classes;
    public $sections;
    public $subtypes;
    public $exams;
    public $updateid;
    public $editmodal=false;
   
    public function setDate($date){
     $this->state['date']=$date;
    
    }
    
   public function setime($data){
     $this->state['time']=$data;
   }
   public function getData(){

    $this->classes=Manage::where('category','class')->get();
    $this->sections=Manage::where('category','Section')->get();
    $this->subtypes=Manage::where('category','subtype')->get();
    $this->exams=Exam::all();

   }
   public function mount(){
    $this->getData();
    
   }
 
    public function addExam(){
       
       $data= validator::make($this->state,[
            'name'=>'required|alpha|max:30|min:8',
            'class'=>'required',
            'section'=>'required',
            'subtype'=>"required",
            'time'=>'required',
            'date'=>'required|date|date_format:Y/m/d'
        ])->validate();
       
        Exam::create($data);
        $this->getData();
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Exam Added"]);
        $this->state='';
    }
    public function edit(Exam $exam){
    $this->state=$exam->toArray();
    $this->editmodal=true;
    $this->updateid=$exam->id;

    }
    public function update(){
        $data= validator::make($this->state,[
            'name'=>'required|alpha|max:30|min:8',
            'class'=>'required',
            'section'=>'required',
            'subtype'=>"required",
            'time'=>'required',
            'date'=>'required|date|date_format:Y/m/d'
        ])->validate();
        Exam::find($this->updateid)->update( $data);
        $this->state='';
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Exam Updated"]);
        $this->getData();
    }
    public function trash($id){
        Exam::find($id)->delete();
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Exam Deleted"]);
        $this->getData();

    }
    public function render()
    {
        return view('livewire.examwire.examwire');
    }
}
?>
