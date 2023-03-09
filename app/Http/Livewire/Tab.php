<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Tab as Tabs;

class Tab extends Component
{
    public $name;
    public  $category;
    public $updateid;
    public $action='store';
    public $buttonlablel="Add";
    public $tab="Area";

    public $datas;

    protected $rules = [
        'name' => 'required',
    ];
    public $tablename = 'Area';

    public $inputfield = "Area Name";

    public function mount(){
        $this->getData();
    }

    public function getData(){
        $this->datas = Tabs::where('category', $this->tablename)->get();
    }
    public function area()
    {
        $this->tablename = "Area";
        $this->inputfield = "Area Name";
        $this->getData();
        $this->reset(['name','category']);
    }
    public function ward()
    {
        $this->tablename = "Ward";
        $this->inputfield = "Ward Name";
        $this->tab="Ward";
        $this->getData();
        $this->reset(['name','category']);
    }
    public function store()
    {
      $data=  $this->validate();
      $data['category'] = $this->tablename;
      Tabs::create($data);
      $this->getData();
    }
 
    public function edit($id){
        $data=Tabs::where('id',$id)->first();
        $this->action="update";
        $this->buttonlablel="Update";
        $this->fill(['name'=>$data->name,'category'=>$data->category, 'updateid'=>$data->id]);
    }
    public function update(){
      $data=$this->validate();
        Tabs::where('id',$this->updateid)->update($data);
        $this->reset(['name','category']);
    }
    public function delete($id){
        Tabs::where('id',$id)->delete();
    }
    public function render()
    {
        // $data='';
        // if($this->tab=='Area'){
        //     $data=Da::where('category','area')->get();
           
        // }
        // if($this->tab=='Ward'){
        //     $data=Da::where('category','Ward')->get();

        // }
    
      
        return view('livewire.tab');
    }
}