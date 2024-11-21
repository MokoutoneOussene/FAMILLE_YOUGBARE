<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nom' => 'YOUGBARE',
            'prenom' => 'Administrateur',
            'telephone' => '61346554',
            'role' => 'Admin',
            'password' => Hash::make('password'),
        ]);
    }
}
