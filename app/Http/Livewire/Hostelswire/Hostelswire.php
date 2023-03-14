<?php

namespace App\Http\Livewire\Hostelswire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Hostel;

class Hostelswire extends Component
{
    public $state=[];
    public $hostels;
    public $updateid;
    public $updatemethod=false;
    public function getData(){
        $this->hostels=Hostel::all();

    }
    public function mount(){
        $this->getData();
        
    }
    public function addhostel(){
        $this->state='';
       $data= Validator::make($this->state,[
            'costperbed'=>'required',
            'roomtype'=>'required',
            'roomnumber'=>'required',
            'hostelname'=>'required',
            "numberofbed"=>"required"
        ])->validate();
        Hostel::create($data);
        $this->getData();
        $this->dispatchBrowserEvent('sweet-alert',["msg"=>"Transport added Success"]);
       
        $this->updatemethod=false;
        
    }
    public function edit(Hostel $hostel){
        $this->state=$hostel->toArray();
        $this->dispatchBrowserEvent('show-modal');
        $this->updateid=$hostel->id;
        $this->updatemethod=true;
       
    }
    public function update(){
        $data= Validator::make($this->state,[
            'costperbed'=>'required',
            'roomtype'=>'required',
            'roomnumber'=>'required',
            'hostelname'=>'required',
            "numberofbed"=>"required"
        ])->validate();
        Hostel::find($this->updateid)->update($data);
        $this->getData();
        $this->dispatchBrowserEvent('sweet-alert',["msg"=>"Transport Updated Success"]);
    }
    public function trash($id){
        Hostel::find($id)->delete();
        $this->dispatchBrowserEvent('sweet-alert',["msg"=>"Transport Deleted Success"]);
        $this->getData();
        
    }
    public function render()
    {
        return view('livewire.hostelswire.hostelswire');
    }
}
