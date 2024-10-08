<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('login')->insert([
            'level'=> 'Admin',
            'nama'=> 'Firdaus Depa',
            'username'=> 'Fyrnx',
            'foto' => 'foto',
            'password' => Hash::make('1234567'),
        ]);
    }
}
