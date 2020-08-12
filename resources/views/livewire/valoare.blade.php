<div>
    <!-- <input wire:model="message" type="text"> -->


    <input wire:model.debounce.5ms="message" type="text">

    <h1>{{ $message }}</h1>

    <!-- {{7 * 7}} -->

    <!-- <h1>{{$message2}}</h1> -->
</div>
