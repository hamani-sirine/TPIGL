<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function create()
    {
        return view('User.admin');
    }

    
    public function Ajouter_admin(Request $request)
    {
            $user=new User();
            $user->login=$request->input('login');;
            $user->email=$request->input('email');
            $user->mdp= $mdp=$request->input('mdp');
            $user->nom= $nom=$request->input('nom');
            $user->prenom=$prenom=$request->input('prenom');
            $user->fonction='admin';
            $user->save();
            echo "successful !"; 
    }

}
