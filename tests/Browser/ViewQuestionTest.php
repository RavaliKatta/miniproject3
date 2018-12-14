<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewQuestion extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testViewQuestion()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('#email', 'ravali@gmail.com')
                ->type('#password', 'Ravali@123')
                ->press('button[type="submit"]')
                ->assertSee('Questions')
                ->clickLink('Create a Question')
                ->assertSee('Create Question')
                ->type('#body', 'what is your name?')
                ->press('#submit')
                ->assertSee('IT WORKS!')
                ->clickLink('View')
                ->assertSee('Question')
                ->press('#navbarDropdown')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
