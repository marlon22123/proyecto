<?php

namespace App\Http\Livewire\Manage;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceIndex extends Component
{
    use WithPagination;
    public $search;
    public $cant=10;
    public $selected_id;
    public $modal=false;

    public $name,$description,$price;
    protected $listeners=['delete'];

    public function paginationView()
    {
        return 'tailwind-pagination';
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingCant()
    {
        $this->resetPage();
    }
    public function render()
    {
        $services=Service::where('name','like','%' . $this->search .'%')
        ->orWhere('description','like','%' . $this->search .'%')
        ->latest('id')->paginate($this->cant);

        return view('livewire.manage.service-index',compact('services'))->layout('layouts.app');
    }

    public function create()
    {
        $rules=[
      
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|numeric|min:1|decimal:0',

         ];
     
       $this->validate($rules);

        Service::create([
          
             'name'=>$this->name,
            'description'=>$this->description,     
            'price'=>$this->price, 
        ]);
       
         $this->closemodal();
        /*  session()->flash('success','Agregado Correctamente'); */
     $this->emit('success','Agregado Correctamente');

    }

    public function closemodal()
    {   
        $this->reset([
            'modal',
            'name',
            'description',
            'price',
            'selected_id'
        ]);
        $this->resetValidation();
    }

    public function edit(Service $service)
    {
       $record=$service;

       $this->selected_id=$record->id;

       $this->name=$record->name;
       $this->description=$record->description;
       $this->price=$record->price;
        $this->modal=true;
    }

    public function delete(Service $service)
    {
      $service->delete();
    }

    public function update()
    {
        $rules=[

            'name'=>'required',
            'description'=>'required',
            'price'=>'required|numeric|min:1|decimal:0',
         ];
     
       $this->validate($rules);

       $patient=Service::findOrFail($this->selected_id);
       $patient->update([

        'name'=>$this->name,
        'description'=>$this->description,
        'price'=>$this->price, 

    ]);
        $patient->save();
        $this->closemodal();
        $this->emit('success','Cambios guardados Correctamente');

    }
  
}
