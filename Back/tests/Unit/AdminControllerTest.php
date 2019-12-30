<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
///Unit test class for AdminController.
///
///This class is used to test the fonctionality "Add user (admin)". 
class AdminControllerTest extends TestCase
{
    /**
    * This fonction  checks if the user has been added successfully.
    *
    * @return void
    */
       /**
     * @runInSeparateProcess
     */
    public function testAjouter()
    {   $request=['login'=>'user99','email'=>'user99@gmail.com','mdp'=>'motdepasse','nom'=>'user','prenom'=>'99'];
        $response = $this->call('GET', 'cr2',$request);
        $response->assertJson(['message'=>'successful']);
        $response->assertStatus(200);
        $last2 = DB::table('user')->orderBy('id_user', 'DESC')->first();
        User::where('id_user', $last2->id_user)->delete();

    }
}
