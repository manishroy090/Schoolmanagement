<?php

namespace App\Http\Livewire\Managewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Manage;
class Managewire extends Component
{ public $state=[];
    public $tablename="Section";
    public $listeners=['setDate'];
    public $datas;
    public $updateid;
    public $editbtn=false;
    public function setDate($date){
        $this->state['date']=$date;
    }
   
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
    $this->dispatchBrowserEvent('show-alert',['msg'=>'Added!'.$this->tablename]);
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
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Updated!".$this->tablename]);
    }
    public function trash($id){
       $delet= Manage::find($id)->delete();
       if($delet){
        $this->dispatchBrowserEvent('show-alert',['msg'=>"Deleted !".$this->tablename]);
       }
        $this->getData();
    
    }
    public function render()
    {
        return view('livewire.managewire.managewire');
    }
}
?>
