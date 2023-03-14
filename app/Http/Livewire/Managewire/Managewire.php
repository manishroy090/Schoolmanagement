<?php

namespace App\Http\Livewire\Managewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Manage;
class Managewire extends Component
{ 
    public $state = [];
    public $tablename = "Section";
    public $listeners = ['setDate','setTime'];
    public $datas;
    public $updateid;
    public $datelabel = "Date";
    public $starttime = false;
    public $editbtn = false;
  

    public function datepicker(){
       
        $this->dispatchBrowserEvent('show-timepicker',['time'=>$this->starttime]); 
    }
    public function showForm(){
        $this->dispatchBrowserEvent('show-form'); 

    }
    public function setDate($date){
       $this->state['date_time'] = $date;
       
    }

    public function setTime($endtime){
        $this->state['ending'] = $endtime;
    }
    
   public function tab($tab){
   
    if($tab=="period"){
        $this->starttime = true;
        $this->dispatchBrowserEvent('end-datepicker');
    }
    else{
        $this->starttime = false;

    }
    
        $this->showForm();
        $this->datepicker();
        $this->tablename = $tab;
        $this->editbtn = false;
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
                 'date_time'=>'required',  
                 'ending'=>'nullable'
        ])->validate();
      $data['category'] = $this->tablename;
      Manage::create($data);
      session()->flash('msg',$this->tablename." "."Added Successfully");
      $this->dispatchBrowserEvent('show-alert',['msg'=>'Added!'.$this->tablename]);
      $this->getData();
      $this->state='';
    }

    public function edit(Manage $data){
      $this->state = $data->toArray();
      $this->updateid = $data;
      $this->editbtn = true;
    }
    public function update(){
        $data=validator::make($this->state,[
            'name'=>'required',
            'date_time'=>'nullable',
            'time' => 'nullable'
         ])->validate();
        $data['category'] = $this->tablename;
         Manage::find($this->updateid->id)->update($data);
         $this->getData();
         $this->dispatchBrowserEvent('show-alert',['msg'=>"Updated!".$this->tablename]);
    }
    public function trash($id){
      
       $delet = Manage::find($id)->delete();
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
