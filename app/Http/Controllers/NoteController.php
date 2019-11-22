<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Note;
use App\Module;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $i1=0;$i2=0;
         $etud=null;
         $notes_s1=null;
         $notes_s2=null;
         $modules_s1=null;
         $modules_s2=null;
        $user=DB::table('user')->where('id_user',$id)->first();
        if ($user != null ){
            
        $etud=DB::table('etudiant')->where('id_user',$id)->first();
       if ($etud != null ){
        $notes = DB::table('note')->where('id_etud',$etud->id_etud)->get();
        foreach ($notes as $note){
            $id_module=$note->id_module;
            $module=DB::table('module')->where('id_module',$id_module)->first();
            if(($module->semestre)== '1'){
                 $notes_s1[$i1]=$note;
                 $modules_s1[$i1]=$module->nom_module;
                 $i1++;
                }
                else {
                    $notes_s2[$i2]=$note;
                    $modules_s2[$i2]=$module->nom_module;
                    $i2++;
                }
            
        }
    }
        
    }
        return view('notes',['notes_s1' => $notes_s1,'notes_s2' => $notes_s2,'modules_s1' => $modules_s1,'modules_s2' => $modules_s2,
                                                 'etudiant'=>$etud, 'user'=>$user  ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
