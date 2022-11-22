<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;


class Counter extends Component
{
    public $name = '';
    public $title;
    
    protected $listeners = ['deleteTask'];

    public function addTask(){
        task::create(['name'=> $this->name]);
    }

    public function deleteTask($id){
        session()->flash('message','Tarea elminiada');
        task::destroy($id);
    }

    public function mount($title){
        $this->title=$title;
        $this->name="";
    }
 
    public function render()
    {
        return view('livewire.counter', ['tasks'=> Task::all()]);
    }
}