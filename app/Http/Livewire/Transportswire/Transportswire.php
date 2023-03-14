<?php

namespace App\Http\Livewire\Transportswire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Transport;

class Transportswire extends Component
{
    public $state=[];
    public $transports;
    public $updateid;
    public $editmodal=false;
    public function getData(){
      $this->transports=Transport::all();
     
    }
    public function mount(){
        $this->getData();

    }
    public function addvechile(){
      
       $data= validator::make($this->state,[
            'rutename'=>"required",
            'vechilenumber'=>'required',
            'drivername'=>'required',
            'licensenumer'=>"required",
            'phonenumber'=>'required'

        ])->validate();
       Transport::create($data);
       $this->getData();
       $this->dispatchBrowserEvent('sweet-alert',["msg"=>"Transport added Success"]);
    }
    public function edit(Transport $transport){
        $this->updateid=$transport->id;
        $this->state=$transport->toArray();
       $this->dispatchBrowserEvent('show-modal');
       $this->editmodal=true;

    }
    public function update(){
        $data= validator::make($this->state,[
            'rutename'=>"required",
            'vechilenumber'=>'required',
            'drivername'=>'required',
            'licensenumer'=>"required",
            'phonenumber'=>'required'

        ])->validate();
        Transport::find($this->updateid)->update($data);
        $this->getData();
        $this->dispatchBrowserEvent('sweet-alert',["msg"=>"Transport Updated Success"]);
    }
    public function trash($id){
       
        Transport::find($id)->delete();
        $this->getData();
        $this->dispatchBrowserEvent('sweet-alert',["msg"=>"Transport Deleted Success"]);

    }
    public function render()
    {
        return view('livewire.transportswire.transportswire');
    }
}
