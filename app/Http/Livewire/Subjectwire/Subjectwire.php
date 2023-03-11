<?php

namespace App\Http\Livewire\Subjectwire;

use App\Models\Manage;
use App\Models\Subject;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Subjectwire extends Component
{   public $state=[];
    public $classes;
    public $subtypes;
    public $edtmethod=false;
    public $updateid;
    public $sublists;
    public function getData(){
       $this->classes= Manage::where('category','class')->get();
       $this->subtypes= Manage::where('category','subtype')->get();
       $this->sublists=Subject::all();
    }
    public function mount(){
        $this->getData();
       
    }
    public function addsub(){
       $data= validator::make($this->state,[
            'name'=>'required',
            'subtype'=>'required',
            'class'=>'required',
            'subcode'=>'required'
        ])->validate();
        Subject::create($data);
        $this->getData();
        $this->state='';
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Subject Added"]);
    
    }
    public function edit(Subject $sublist){
        $this->state=$sublist->toArray();
        $this->edtmethod=true;
        $this->updateid=$sublist->id;
    
    }
    public function update(){
        $data = validator::make($this->state,[
            'name'=>'required',
            'subtype'=>'required',
            'class'=>'required',
            'subcode'=>'required'
        ])->validate();
        Subject::find($this->updateid)->update($data);
        $this->state='';
        $this->getData();
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Subject updated"]);
    }
    public function trash($id){
        Subject::find($id)->delete();
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Subject Deleted"]);
        $this->getData();


    }
    public function render()
    {
        return view('livewire.subjectwire.subjectwire');
    }
}
