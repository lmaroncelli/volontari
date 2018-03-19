<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
                    'ruolo' => "admin",
                    'name' => "Luigi Maroncelli",
                    'email' => 'lmaroncelli@gmail.com',
                    'password' => bcrypt('Labietta')
    	       ]);


    }
}
