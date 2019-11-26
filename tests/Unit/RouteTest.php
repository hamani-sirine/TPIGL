<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {  
        $response=$this->get('/ens');
        $response->assertStatus(200);

        $response=$this->get('/admin');
        $response->assertStatus(200); 

        $response=$this->get('/etud');
        $response->assertStatus(200);

        $response=$this->get('notes/'.random_int(0,100));
        $response->assertStatus(200);
        
        $response=$this->get('/viewst');
        $response->assertStatus(200);

        
    }

    
}
