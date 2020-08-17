<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Contract;
use App\Contract_Detail;
use App\ContractDetail;
use Illuminate\Database\Migrations\Migration;

class ContractController extends Controller
{
            public  function index()
             {
                // $data = "test";
                // $data2 = "document controller";

                // echo "<h2>" . $data2 . "</h2>";

                // echo $data;
                // echo $data2;
                $contract = Contract::all();
               // echo $contracts;
                //return view('contract');
   
                return view('contract',compact('contract'));
              }

              public function delete($id)
              {
              // echo $id;
              Contract::where('id',$id)->delete();
              return redirect('contract');
              // DB::delete('delete from contracts where id = 4');

               }

               public function edit($id)
               {
                
                  $editcontract = Contract::where('id', $id)
               ->get();
                 return view('editcontract',compact('editcontract'));
                }

                public function update(Request $request)
                {
                 
                //  dd($request);
                 $id = $request->id;
               //  $update_contract->save();
                //return view('home',compact('contract')); 
                //cho $id;
                //echo $update_contract->id ;
                //$update_contract->save();
                //DB::update('update contracts set Partner = ? where id = ?', [$update_contract->Partner],  $id);

                //Contract::whereIn('id', $id)->update($request->all());

                 DB::table('contracts')
                 ->where('id', $id)
                 ->update(
                  ['Partner' => $request->inputPartner,
                  'ContractNumber' => $request->inputContractNumber,
                  'ContractStartDate' => $request->StartDate,
                  'ContractEndDate' => $request->EndDate,
                  'ContractCategory' => $request->inputCategory]
                 
             );

                return redirect('contract');
               //   Contract::where('id', 34)
               //   ->update(['Partner' => 'mmmmm']);
             
               //  return redirect('contract');

                //Route::put('user/{id}', 'UserController@update');

                //echo $update_contract;

                //DB::update('update contracts set name = ? where id = 1', ['Vasilica']);

                  //return view('editcontract',compact('editcontract'));
                 }

              public function store(Request $request)
              {
               //dd($request);
                $contract = Contract::all();
                $new_contract = new Contract;
                $new_contract->Partner = $request->inputPartner;
                $new_contract->ContractNumber = $request->inputContractNumber;
                $new_contract->ContractStartDate = $request->StartDate;
                $new_contract->ContractEndDate = $request->EndDate;
                $new_contract->ContractCategory = $request->inputCategory;
                $new_contract->save();

                
               $newContractDetail = new ContractDetail;
               $newContractDetail->item_name = $request->item_name;
               $newContractDetail->qtty = $request->qtty;
               $newContractDetail->price = $request->price;
               
               $newContractDetail->value = $request->value;
               $newContractDetail->contract_id = $new_contract->id;
               $newContractDetail->save();

                    return view('home',compact('contract')); 
      return redirect('contract');
                //return view('contract');

                 //  $name = $request->input('inputContractNumber');
                  // $name2=$request->inputContractNumber;
                  // $name5 = $request->input('inputContractNumber');
                  // echo $name;
                  // echo $name5;
                  //return view('contract');
               //\App\Contract::create($request->all());
                  //
              }
}
