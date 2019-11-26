<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


/** EnseignantController **/

///Controller for the user 'enseignant'.

///this class allows you to make CRUD database operations.

class EnseignantController extends Controller
{
    public function create()
    {
        return view('User.enseignant');
    }
}
/** 
   *add a new user (enseignant) to the list of users
   *the informations about this user are extracted from a form
*/
    public function Ajouter_enseignant(Request $request)
    {
            $user=new User();
            $user->login=$request->input('login');;
            $user->email=$request->input('email');
            $user->mdp= $mdp=$request->input('mdp');
            $user->nom= $nom=$request->input('nom');
            $user->prenom=$prenom=$request->input('prenom');
            $user->fonction='Enseignant';
            $user->save();
            echo "successful !"; 
    }
}
  
   
