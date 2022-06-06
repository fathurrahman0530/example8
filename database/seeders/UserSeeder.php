<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'id' => NULL,
        //     'fullname' => 'Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('Admin12345'),
        //     'role' => 1,
        //     'profile' => 'default.png',
        // ]);
    }
}
