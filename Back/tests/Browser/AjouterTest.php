<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{   
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */

      /**
     * @runInSeparateProcess
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/#/form-ajout')
                    ->assertSee('AJOUTER ADMINISTRATEUR')
                    ->press('AJOUTER ADMINISTRATEUR')
                    ->select('fonction','Administrateur')
                    ->type("login",'username')
                    ->type('email','username@gmail.com')
                    ->type('prenom','Sirine')
                    ->type('nom','Hamani')
                    ->type('mdp','password')
                    ->press('ENREGISTRER')
                    ->clickLink('Listes')
                     ->assertSee('LISTES');
                    
        });
    }
}
