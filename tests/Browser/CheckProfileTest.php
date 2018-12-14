<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CheckProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->make();
        $user->save();
        $this->browse(function ($browser) use ($user)  {
            $browser->visit('http://localhost:8000/user/12/profile')
                ->assertSee('My Profile');
        });
    }
}
