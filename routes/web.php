<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Contract;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/user', 'UserController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/contract', 'UserController@sleep')->name('contract');

Route::get('/contract', 'ContractController@index')->name('contract');

Route::post('/editcontract/{id}', 'ContractController@edit')->name('editcontract');

Route::post('/updatecontract/{id}', 'ContractController@update')->name('updatecontract');

Route::post('/deletecontract/{id}', 'ContractController@delete')->name('deletecontract');

Route::post('/savecontract','ContractController@store')->name('savecontract');


Route::post('/upload',function (Request $request){

    $request->image->store('images');

    return('Uploaded');

    //dd($request->file('image'));

});


// Route::post('/savecontract', function(Request $request){
//    // dd(request()->all());
//     $contract = new Contract;
//     $contract->Partner = $request->inputPartner;
//     $contract->ContractNumber = $request->inputContractNumber;
//     $contract->ContractStartDate = $request->StartDate;
//     $contract->ContractEndDate = $request->EndDate;
//     $contract->ContractCategory = $request->inputCategory;
//     $contract->save();
//     // \App\Contract::create($request->all());
// });

// public function store(Request $request)
// {
//     // Validate the request...

//     $flight = new Flight;

//     $flight->name = $request->name;

//     $flight->save();
// }


//Route::post('/store', function(Request $request){
    //dd(request()->all());

    //  $inputContractNumber = $request->input('inputContractNumber');
    //  $inputPartner = $request->input('inputPartner');
    //  $inputCategory = $request->input('inputCategory');
    //  $inputStartDate = $request->input('StartDate');
    //  $inputEndDate = $request->input('EndDate');
    //  echo $inputContractNumber;
    //  echo $inputPartner;
    //  echo $inputCategory ;
    //  echo $inputStartDate;
    //  echo $inputEndDate ;

    // $todayDate = date("Y-m-d");
    // echo $todayDate;

//});

/* Route::post('/savecontract', array('before' => 'csrf', function()
{
    
})
);

 */