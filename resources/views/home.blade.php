@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
	                    <input type="file" name="image" />
                       <input type="submit" name="Upload" />
                    </form>
                </div>
</div>


<h1>Hello, {{ $title ?? '' }}</h1>

<form 
method="post" 
enctype="multipart/form-data"
action="/savecontract"
class="mx-auto" style="width: 800px;">
@csrf
@auth
  <div class="form-row">

    <div  class="form-group">
      <label for="inputEmail4">Contract Number</label>
      <input type="text" class="form-control" name="inputContractNumber" id="inputContractNumber">
    </div>

    <div  class="form-group">
      <label for="inputEmail4">Partener</label>
      <input type="text" class="form-control" name="inputPartner"  id="inputPartner">
    </div>

    <div  class="form-group">
      <label for="inputEmail4">Categorie Contract</label>
      <input type="text" class="form-control" name="inputCategory"  id="inputCategory">
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
  
    <button type="submit" class="btn btn-primary">Submit</button>
    @endauth
</form>
<br>

@endsection
