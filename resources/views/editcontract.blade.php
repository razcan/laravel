@extends('layouts.app')

@section('content')


<form 
method="post" 
enctype="multipart/form-data"
action="{{ route('updatecontract')}}"
class="p-5"
style="width: 800px;">
@csrf
@auth

@foreach ($editcontract as $contract)

<div  class="form-group">
      <label for="id">Id</label>
      <input type="text" class="form-control" name="id"  id="id"
      value={{$contract->id}} 
      >
    </div>
    
      <div  class="form-group">
      <label for="inputPartner">Partener</label>
      <input type="text" class="form-control" name="inputPartner"  id="inputPartner"
      value={{$contract->Partner}}
      >
    </div>

    <div class="form-group">
    <label for="inputContractCategory">Categorie Contract</label>
    <select class="form-control" name="inputCategory"  id="inputCategory">
      <option>Servicii</option>
      <option>Consultanta</option>
      <option>Curatenie</option>
      <option selected>{{$contract->ContractCategory}}</option>
    </select>
    
  </div>

    <div  class="form-group">
         <label >Start Data</label>
         <input type="date" name="StartDate" min="1000-01-01" 
         name="inputStartDate" id="inputStartDate"
            max="3000-12-31" class="form-control"
            value={{$contract->ContractStartDate}}
            >
    </div>

    <div  class="form-group">
        <label >Final Data</label>
        <input type="date" name="EndDate" min="1000-01-01" name="inputEndDate" id="inputEndDate"
        max="3000-12-31" class="form-control"
        value={{$contract->ContractEndDate}}
        >
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

@endforeach

    @endauth
</form>
<br>

@endsection
