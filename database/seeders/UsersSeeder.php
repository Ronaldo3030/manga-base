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
            'image' => 'https://avatars.githubusercontent.com/u/86241807?v=4',
            'password' => bcrypt('jucajuca123'),
            'type_user' => 'user'
        ]);
        User::create([
            'name' => 'Teste',
            'email' => 'teste@gmail.com',
            'image' => 'https://thinksport.com.au/wp-content/uploads/2020/01/avatar-.jpg',
            'password' => bcrypt('123123'),
            'type_user' => 'user'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'image' => 'https://www.shutterstock.com/image-vector/user-icon-vector-600nw-393536320.jpg',
            'password' => bcrypt('jucajuca123'),
            'type_user' => 'admin'
        ]);
    }
}
