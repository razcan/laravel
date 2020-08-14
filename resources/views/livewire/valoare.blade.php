<div>
    <!-- <input wire:model="message" type="text"> -->


    <input wire:model.debounce.5ms="cantitate" type="text">
    <input wire:model.debounce.5ms="pret" type="text">
    <input type="text" value="{{ $cantitate * $pret }}" >

    <h1>{{ $cantitate * $pret }}</h1>

    <button wire:click="addTodo({{ $cantitate }}, {{ $pret }} , {{ $valoare2 }})">Trimite Request</button>
    <button wire:click="$set('valoare2', {{ $cantitate * $pret }})">Say Hi</button>

<p> {{ $valoare2 }} </p>

</div>
