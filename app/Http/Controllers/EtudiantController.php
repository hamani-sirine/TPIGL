<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\html;
use App\User;
use App\Etudiant;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{

    public function create()
    {
        return view('Student.etud');
    }

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
