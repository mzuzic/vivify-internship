<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'm',
            'email' => 'marko1@vivifyideas.com',
            'password' => \Hash::make('password')
        ]);
    }
}
