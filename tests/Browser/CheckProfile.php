<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CheckProfile extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCheckProfile()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/user/12/profile')
                ->assertSee('My Profile');
        });
    }

}
