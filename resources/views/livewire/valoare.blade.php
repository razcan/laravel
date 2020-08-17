

<form wire:submit.prevent="save_contract">
<div  class="form-group col-xs-4 col-md-4">
      <label for="inputContractNumber" class="control-label">Contract Number</label>
      <input 
      wire:model.debounce.5ms="inputContractNumber"
      class="form-control"
      type="text" name="inputContractNumber" id="inputContractNumber">
</div>

<div  class="form-group col-xs-4 col-md-4">
      <label for="inputPartner" class="control-label">Partener</label>
      <input 
      wire:model.debounce.5ms="inputPartner"
      class="form-control"
      type="text" name="inputPartner" id="inputPartner">
</div>

<div class="form-group col-xs-4 col-md-4">
    <label for="inputCategory">Categorie Contract</label>
    <select 
    wire:model.debounce.5ms="inputCategory"
    class="form-control" name="inputCategory"  id="inputCategory">
      <option>Servicii</option>
      <option>Consultanta</option>
      <option>Curatenie</option>
    </select>
</div>

<div  class="form-group  col-xs-4 col-md-4">
         <label >Start Data</label>
         <input 
         wire:model.debounce.5ms="inputStartDate"
         type="date" name="StartDate" min="1000-01-01" name="inputStartDate" id="inputStartDate"
            max="3000-12-31" class="form-control">
    </div>

    <div  class="form-group col-xs-4 col-md-4">
        <label >Final Data</label>
        <input 
        wire:model.debounce.5ms="inputEndDate"
        type="date" name="EndDate" min="1000-01-01" name="inputEndDate" id="inputEndDate"
        max="3000-12-31" class="form-control">
    </div>

    <div class="form-group col-xs-4 col-md-4">
    <label for="item_name">Articol</label>
    <input 
    wire:model.debounce.5ms="item_name"
    type="text" class="form-control" id="item_name" name="item_name" aria-describedby="item_name" placeholder="Articol">
    </div>

    <div class="form-group col-xs-4 col-md-4">
    <label for="qtty">Cantitate</label>
    <input 
    wire:model.debounce.5ms="qtty"
    type="text" class="form-control" 
    id="qtty" name="qtty" aria-describedby="qtty" placeholder="Cantitate">
  </div>


  <div class="form-group col-xs-4 col-md-4">
    <label for="price">Pret</label>
    <input 
    wire:model.debounce.5ms="price"
    type="text" class="form-control" 
    id="price" name="price" aria-describedby="price" placeholder="Pret">
  </div>

  <div class="form-group col-xs-4 col-md-4">
    <label for="Valoare">Valoare</label>
    <input 
    value="{{ $qtty * $price }}"
    type="text" class="form-control" 
    id="value" name="value" aria-describedby="value" placeholder="value">
  </div>



    <!-- <button wire:click="save_contract({{ $qtty }}, {{ $price }}, {{ $qtty * $price }} )">Salvare</button> -->
    <button type="Submit">Salvare</button>

    <!-- <button wire:click="$set('valoare2', {{ $cantitate * $pret }})">Set</button> -->


</form>
@livewireScripts