<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ronaldo',
            'email' => 'sbplayyy@gmail.com',
            'password' => bcrypt('jucajuca123'),
            'type_user' => 'user'
        ]);
        User::create([
            'name' => 'Teste',
            'email' => 'teste@gmail.com',
            'password' => bcrypt('123123'),
            'type_user' => 'user'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('jucajuca123'),
            'type_user' => 'admin'
        ]);
    }
}
