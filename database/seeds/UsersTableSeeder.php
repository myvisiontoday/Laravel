<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++)
        {
            $user = \App\employee::create(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'username' => $faker->unique->userName,
                'password' => $faker->word,
                'remember_token' => str_random(50)
            ));
        }
    }
}
