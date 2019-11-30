<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Note;
use App\Module;
///Controller for the database table "note".
///
///This class allows you to make CRUD database operations such as displaying a list of elements,updating an existing element, inserting into database, deleting a certain row...etc.
class NoteController extends Controller
{
    /**
     * Displays a list of school notes for the user with the corresponding $id.
     *These notes are seperated in two sections : First semester and second semestre.
     * @return \Illuminate\Http\Response
     * @param $id User id
     */
    public function index($id)
    {
         $i1=0;$i2=0;
         $etud=null;
         $notes_s1=null;
         $notes_s2=null;
         $modules_s1=null;
         $modules_s2=null;
         $message='';
        $user=DB::table('user')->where('id_user',$id)->first();
        if ($user != null )
    {
            
        $etud=DB::table('etudiant')->where('id_user',$id)->first();
        if ($etud != null )
        {
        $notes = DB::table('note')->where('id_etud',$etud->id_etud)->get();
            foreach ($notes as $note)
            {
            $id_module=$note->id_module;
            $module=DB::table('module')->where('id_module',$id_module)->first();
            if(($module->semestre)== '1')
            {
                $notes_s1[$i1]=$note;
                $modules_s1[$i1]=$module->nom_module;
                $i1++;
            }
            else 
            {
                $notes_s2[$i2]=$note;
                $modules_s2[$i2]=$module->nom_module;
                $i2++;
            }
            
            }
        }
        $message="successful";
    }
        
    else{$message="failed";}
        return view('notes',['notes_s1' => $notes_s1,'notes_s2' => $notes_s2,'modules_s1' => $modules_s1,'modules_s2' => $modules_s2,
                                                 'etudiant'=>$etud, 'user'=>$user ,'message'=>$message  ]);

        return  response()->json($notes,200); 
        return  response()->json($module,200); 
        return  response()->json($etud,200); 
    }

    
}
