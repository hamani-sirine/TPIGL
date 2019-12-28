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
        
         $data=NULL;
         $i=0;
         $j=0;
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
              //  $data[$i]["semestre"]=1;
                $data[0][$i]["module"]=$module->nom_module;
                $data[0][$i]["cc"]=$note->cc;
                $data[0][$i]["ci"]=$note->ci;
                $data[0][$i]["cf"]=$note->cf;
                $i++;
            }
            else 
            {
              //$data[$i]["semestre"]=2;
                $data[1][$j]["module"]=$module->nom_module;
                $data[1][$j]["cc"]=$note->cc;
                $data[1][$j]["ci"]=$note->ci;
                $data[1][$j]["cf"]=$note->cf;
                $j++;
            }
            $i++;
            }
        }
      //  $message="successful";
    }
        /*
    else{
        $message="failed";
        }
*/
        

        return $data;

        return  response()->json($notes,200); 
        return  response()->json($module,200); 
        return  response()->json($etud,200);  
    }

    
}
