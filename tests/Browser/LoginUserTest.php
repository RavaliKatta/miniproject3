<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginUser()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user){
            $browser->visit('/login')
                    ->clickLink('Login')
                    ->type('#email', 'ravali@gmail.com')
                    ->type('#password', 'Ravali@123')
                    ->click('button[type="submit"]')
                    ->assertSee('Questions')
                    ->press('#navbarDropdown')
                    ->clickLink('Logout')
                    ->assertSee('Laravel');
        });
    }
}
