<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
    App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	'name' => 'dani',
        	'email' => 'rizqiramadani232@gmail.com',
        	'password' => bcrypt(12345678)
        ]);
    }
}
