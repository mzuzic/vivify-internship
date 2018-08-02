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
        App\Country::create([
            'name' => 'Srbija'
        ]);
       
        App\Country::create([
            'name' => 'Banglades'
        ]);
        
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'm',
            'email' => 'marko1@vivifyideas.com',
            'company' => 'vivify',
            'country_id' => 1,
            'password' => \Hash::make('password')
        ]);
        
        
    }
}
