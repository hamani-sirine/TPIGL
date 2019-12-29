<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\Assert;
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
       /**
     * @runInSeparateProcess
     */
   
    public function testIndex()
	{  $i=1;
    $response = $this->call('GET', 'notes/'.$i);
    $response->assertJsonStructure([
        '0'=>[
     '*'=>[
         'module','cc','ci','cf'
         ],
     ],
        '1'=>[
            '*'=>[
                'module','cc','ci','cf'
                ],
        ],
    ]);
    

    }
   
    
 

}
