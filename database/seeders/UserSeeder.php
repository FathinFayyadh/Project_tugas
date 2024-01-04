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
    DB::table('users')->insert([
    'name' =>'Mimin',
    'email' =>'fathinfayyadh4@gmail.com',
    'password' =>Hash::make('mantapjiwa'),
    'phone_number' =>'089636802003',
    'avatar' =>'',
    'role' =>'admin',
    'created_at' =>now(),
    'updated_at' =>now()
    ]);
    }
}
