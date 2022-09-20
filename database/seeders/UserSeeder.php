<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'alamat' => 'jl kp jembatan',
            'telepon' => '087799995555',
            'password' =>  Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'alamat' => 'jl kp jembatan',
            'telepon' => '087799995555',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
