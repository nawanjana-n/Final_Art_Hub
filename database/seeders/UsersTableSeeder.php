<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('users')->insert([
        //Admin
        [
           'name' => 'Admin',
           'username' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => Hash::make('123'),
           'role' => 'admin',
           'status' => 'active',
        ],



       //seller
[
    'name' => 'Seller',
    'username' => 'seller',
    'email' => 'seller@gmail.com',
    'password' => Hash::make('123'),
    'role' => 'seller',
    'status' => 'active',
 ],



//Client
[
    'name' => 'Client',
    'username' => 'client',
    'email' => 'client@gmail.com',
    'password' => Hash::make('123'),
    'role' => 'client',
    'status' => 'active',
 ],




        ]);
    }
}

