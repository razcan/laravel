@extends('layouts.app')

@section('content')

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

</script> -->



<div>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Partner</th>
      <th scope="col">ContractNumber</th>
      <th scope="col">ContractCategory</th>
      <th scope="col">ContractStartDate</th>
      <th scope="col">ContractEndDate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach ($contract as $contracts)
    <tr>
      <td>{{$contracts->Partner}}</td>
      <td>{{$contracts->ContractNumber}}</td>
      <td>{{$contracts->ContractCategory}}</td>
      <td>{{$contracts->ContractStartDate}}</td>
      <td>{{$contracts->ContractEndDate}}</td>
      <td>
      
      <!-- <button onclick="location.href='http://www.google.com'" type="button">
         www.google.com</button>
         <button onclick="href={{'/home/'.$contracts->Partner}} type="button">
         www.google.com</button>
<a href="{{'/home/'.$contracts->Partner}}">Edit</a> -->
<form action="{{ route('deletecontract', $contracts->id) }}" method="post">
@csrf
<button type="submit" class="btn"><i class="fa fa-times" style="font-size:20px;color:red;"></i></button>

</form>

<form action="{{ route('editcontract', $contracts->id) }}" method="post">
@csrf
<button class="btn"><i class="fa fa-pencil-square-o" style="font-size:20px;color:green;"></i></button>
</form>

<!-- https://fontawesome.com/v4.7.0/icon/pencil-square-o -->
      </td>
    </tr>
@endforeach
  </tbody>
</table>

</div>



<form 
method="post" 
enctype="multipart/form-data"
action="/savecontract"
class="p-5"
style="width: 800px;">
@csrf
@auth


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Adauga Contract
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adauga Contract</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div  class="form-group">
      <label for="inputEmail4">Contract Number</label>
      <input type="text" class="form-control" name="inputContractNumber" id="inputContractNumber">
    </div>

    <div  class="form-group">
      <label for="inputEmail4">Partener</label>
      <input type="text" class="form-control" name="inputPartner"  id="inputPartner">
    </div>

    <!-- <div  class="form-group">
      <label for="inputEmail4">Categorie Contract</label>
      <input type="text" class="form-control" name="inputCategory"  id="inputCategory">
    </div>  -->
    <div class="form-group">
    <label for="exampleFormControlSelect1">Categorie Contract</label>
    <select class="form-control" name="inputCategory"  id="inputCategory">
      <option>Servicii</option>
      <option>Consultanta</option>
      <option>Curatenie</option>
    </select>
  </div>

    <div  class="form-group">
         <label >Start Data</label>
         <input type="date" name="StartDate" min="1000-01-01" name="inputStartDate" id="inputStartDate"
            max="3000-12-31" class="form-control">
    </div>

    <div  class="form-group">
        <label >Final Data</label>
        <input type="date" name="EndDate" min="1000-01-01" name="inputEndDate" id="inputEndDate"
        max="3000-12-31" class="form-control">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div>

</div>

    @endauth
</form>
<br>

@endsection
