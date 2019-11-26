<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

/** AdminController **/

///Controller for the user 'admin'

///this class allows you to make CRUD database operations.
class AdminController extends Controller
{
    
    public function create()
    {
        return view('User.admin');
    }
    /** 
       *add a new user (admin) to the list of users
       *the informations about this user are extracted from a form
    */
    
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
