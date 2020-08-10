<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;


class UserController extends Controller
{

    //

  public  function sleep()
{
        $data = array(
            'title'=>'My App',
            'Description'=>'This is New Application',
            'author'=>'foo'
            );
        return view('home')->with($data);
}
public function store(Request $request)
{
    $name = $request->input('name');
    return $name;
    //
}


public function getData(Request $request)
{
echo $request;
}

    public function index() {

        //   DB::table('users')->insert([
        //       ['name'=> 'rzc2', 'email' => 'taylor2@example.com', 'password' => 'y'],
        //       ['name'=> 'rzv2','email' => 'dayle2@example.com', 'password' => 'x'],
        //   ]);

      // $users = DB::table('users')->get();
      $users = User::all();
      $niste = DB::table('users')->count();

      //echo 'count='.$niste;
      //DB::table('users')->where('id','>',5)->delete();
      

      // DB:update('update users set name = ? where id = 1',['razcan']);
       //$affected = DB::update('update users set name = ? where id = 1', ['Vasile']);
      // DB::update('update users set name = ? where id = 1', ['Petre']);

    //   $users = DB::select('select * from users where name like "rzc" ');

     //  $users = DB::select('select * from users');

      // 
  User::where('name','razcan3')->delete();

  // $user1 = new User();
  // $user1->name='razcan788';
  // $user1->email = 'ra788@gmail.com';
  // $user1->password ='pass788';
  // $user1->save();
 //dd($user1);


 $test2 = User::findOrFail(1);
 //echo $test2;


 

         foreach ($users as $user) {
         echo $user->name.";" ;
         echo $user->email.";";
         echo $user->password.";";
      }

    //  User::where('name', 'Petre')
     // ->update(['name' => 'Gheorghe']);
     // ->where('destination', 'San Diego')
  

   // DB::delete('delete from users where id = 2');

   

    }


  
}
