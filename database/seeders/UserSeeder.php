<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'id'=>'1',
        //     'name'=>'admin',
        //     'password'=> bcrypt('123456'),
        //     'email'=>'minhloi1131130@gmail.com'
        //     // 'password'=>'123456'
        // ]);
        User::create([
            'id'=>'1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
