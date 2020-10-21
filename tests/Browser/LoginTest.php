<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
      $usuario= factory(\App\User::class)->create();

        $this->browse(function (Browser $browser) use ($usuario) {

            $browser->visit('/login')
            ->type('email', $usuario->email)
            ->type('password','password')
            ->pause(4000)
            ->screenshot('login')
            ->press('entrar')
            ->pause(4000)
            ->assertPathIs('/admin/loja')
            ->pause(4000)
            ->screenshot('/admin/loja')
            ;

        });
    }
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }
}
