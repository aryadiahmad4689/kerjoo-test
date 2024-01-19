<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nama Pengguna',
            'email' => 'email@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'name' => 'Nama Pengguna',
            'email' => 'emails@example.com',
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'name' => 'Nama Pengguna',
            'email' => 'emailss@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
