<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\html;
use App\User;
use App\Etudiant;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/** EtudiantController **/

///Controller for the database table "etudiant".

///this class allows you to make CRUD database operations.

class EtudiantController extends Controller
{

    public function create()
    {
        return view('Student.etud');
    }
    /** 
      *add a new user (student) to the list of students
       *the informations about this user are extracted from a form
       */
    public function Ajouter_etudiant(Request $request)
    {
            $user=new User();
            $user->login=$request->input('login');
            $user->email=$request->input('email');
            $user->mdp= $mdp=$request->input('mdp');
            $user->nom= $nom=$request->input('nom');
            $user->prenom=$prenom=$request->input('prenom');
            $user->fonction='etudiant';
            $user->save();
           // getData();
            $etud=new Etudiant();
            $etud->id_user=$user->id;
            $etud->promo=$request->input('promo');
            $etud->groupe=$request->input('groupe');
            $etud->option=$request->input('option');
            $etud->save();  
            User::where('id_user', $user->id)->update(array('id' => $etud->id_etud));
            echo "successful !";
    }

    /**view added students
     */
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
