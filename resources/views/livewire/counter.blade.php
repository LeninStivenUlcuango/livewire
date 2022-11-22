<div>
    <h2>Codigo facilito</h2>
    @if (session()->has('message'))
    <p>{{session('message')}}</p>
        
    @endif
    @foreach ($tasks as $task)
        @livewire('list-task', ['task'=> $task], key($task->id))
    @endforeach
    <hr>
    <h3>{{$name}}</h3>
    <input wire:model="name" type="text">
    <button wire:click="addTask">Agregar</button>
</div>
 