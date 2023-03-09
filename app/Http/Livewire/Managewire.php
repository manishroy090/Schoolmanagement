<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Manage;


class Managewire extends Component
{ public $state=[];
    public $tablename="Section";
    public $datas;
    public $updateid;
    public $editbtn=false;
   
    public function section(){
      $this->tablename="Section";
      $this->state='';
      $this->editbtn=false;
     
      $this->getData();
    }
    public function class (){
        $this->state='';
        $this->tablename="Class";
        $this->editbtn=false;
        $this->getData();
    }
    public function getData(){
        $this->datas=Manage::where('category',$this->tablename)->get();

    }
    public function mount(){
        $this->getData();
    }

    public function add(){
     $data=validator::make($this->state,[
        'name'=>'required',
        'date'=>'required'
     ])->validate();
     $data['category']=$this->tablename;
  
     Manage::create($data);
    session()->flash('msg',$this->tablename." "."Added Successfull");
    $this->dispatchBrowserEvent('show-alert',['msg'=>$this->tablename]);
     $this->getData();


    }
    public function edit(Manage $data){
        $this->state=$data->toArray();
        $this->updateid=$data;
      $this->editbtn=true;
    }
    public function update(){
        $data=validator::make($this->state,[
            'name'=>'required',
            'date'=>'required'
         ])->validate();
         $data['category']=$this->tablename;
        Manage::find($this->updateid->id)->update($data);
        $this->getData();
    }
    public function trash($id){
        Manage::find($id)->delete();
        $this->getData();
    }
    public function render()
    {
        return view('livewire.managewire');
    }
}
?>
