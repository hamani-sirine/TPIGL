<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\html;
use App\User;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{

    public function create()
    {
        return view('Student.add');
    }

    public function create_post(Request $request)
    {
            $user=new User();
            $user->login=$request->input('login');;
            $user->email=$request->input('email');
            $user->mdp= $mdp=$request->input('mdp');
            $user->nom= $nom=$request->input('nom');
            $user->prenom=$prenom=$request->input('prenom');
            $user->fonction= $fonction=$request->input('fonction');
            $user->save();
            echo "successful !";   
    }
    public function ViewStud()
    {
       $stud=User::all();
       $arr=Array('user'=>$stud);
       return view('Student.view',$arr); 
    }

}
