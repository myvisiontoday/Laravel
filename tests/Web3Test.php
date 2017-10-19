<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class Web3Test extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function user_register_and_confirm()
    {
        // When we register
        $this->visit('register')
            ->type('Rabin', 'name')
            ->type('Rabin123456', 'username')
            ->type('raktim4funia@gmail.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->press('Register');

        // After registration
        $this->see('Please confirm your email address.')
            ->seeInDatabase('users', ['name' => 'Rabin', 'verified' => 0]);

        $user = User::whereName('Rabin')->first();

        // You can't login until you confirm your email address.
        $this->visit('login')
            ->type('raktim4funia@gmail.com', 'email')
            ->type('123456', 'password')
            ->press('Login');
        $this->see('Cannot login, Confirm your email first');

        // Like this...
        $this->visit("register/confirm/{$user->token}")
            ->see('You are now confirmed. Please login.')
            ->seeInDatabase('users', ['name' => 'Rabin', 'verified' => 1]);
    }

}
