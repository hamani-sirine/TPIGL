<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class NoteConrollerTest extends TestCase
{
   
    public function testIndex()
	{  $i=1;
    $response = $this->call('GET', 'notes/'.$i);
    $response->assertViewHas('message','successful');
    $response->assertViewHas('user',DB::table('user')->where('id_user',$i)->first());


    }
    
    public function testIndex2()
	{  
    $response = $this->call('GET', 'notes/1000');
    $response->assertViewHas('message','failed');
    $response->assertViewHas('user',NULL);



    }
    
 

}
