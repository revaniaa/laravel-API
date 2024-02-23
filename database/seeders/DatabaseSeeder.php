<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'username' => 'Test User',
            'nama_lengkap' => 'test',
            'level' => 'admin',
            'email' => 'test@example.com',
            'password' => hash::make('test1234'),
        ]);
    }
}
