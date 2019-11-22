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

    public function insérer_Etud(Request $request)
    {
            $user=new User();
            $user->login=$request->input('login');;
            $user->email=$request->input('email');
            $user->mdp= $mdp=$request->input('mdp');
            $user->nom= $nom=$request->input('nom');
            $user->prenom=$prenom=$request->input('prenom');
            $user->fonction= $fonction=$request->input('fonction');
            $user->save();
            getData();
            echo "successful !";   
    }

    //affichage
    public function ViewStud()
    {
       $data['data']=DB::table('user')->get();
       if(count($data))
       {
           return view('Student.view',$data);
       }
       else
       {
        return ('Student.view');
       }
    }

}
