<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{

    public function listAllUsers()
    {
        $users= User:: all();

        return view('listAllUsers',[

                'users'=>$users
            ]);
    }




    //public function test(){


      //  $user= new User();
      //  $user->name= 'paulo orfanelli';
      //  $user->email= 'paulosergioorfanelli@gmail.com';
      //  $user->password= Hash::make('123');
      //  $user->save();

       // echo "<h1>Listagem de Usuarioo</h1>";

        //$user= User::where('id', '=', '1')->first();

       // return view('listUser', [
            //'user'=> $user
        //]);

}
