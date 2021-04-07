<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sirajum',
            'email' => 'sirajummunira61@gmail.com',
            'status' => 'Active',
            'role' => 'Admin',       
            'password' => bcrypt('123456'),
        
        ]);

    }
}
