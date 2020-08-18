<?php
namespace App\Library\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Contract;
use App\Tipcontracte;
  
class DemoOne
{
    public function doSomethingUseful()
    {
    //   return 'Output from DemoOne';
      $tip = Tipcontracte::all();
      return $tip;
    //   return view('contract',compact('contract'));
    }
}
