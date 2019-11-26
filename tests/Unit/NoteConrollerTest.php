<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
///Unit test class for NoteController.
///
///This class is used to test the fonctionality "view student's grades".    

class NoteConrollerTest extends TestCase
{       
    /**
    * This fonction  checks if the data passed to the view "notes" exists and is correct.
    *
    * @return void
    */
     
   
    public function testIndex()
	{  $i=1;
    $response = $this->call('GET', 'notes/'.$i);
    $response->assertViewHas('message','successful');
    $response->assertViewHas('user',DB::table('user')->where('id_user',$i)->first());


    }
    /**
     * This function checks if all the parameters are NULL in the case where the record doesn't exist and the data wasn't sent to the view.
     *
     * @return void
     */

    public function testIndex2()
	{  
    $response = $this->call('GET', 'notes/1000');
    $response->assertViewHas('message','failed');
    $response->assertViewHas('user',NULL);



    }
    
 

}
