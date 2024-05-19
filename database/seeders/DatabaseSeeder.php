<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'	=> 'Admin',
            'email'	=> 'admin@gmail.com',
            'password'	=> Hash::make("12345"),
            'role' => 'admin',
        ]);
        User::create([
            'name'	=> 'User',
            'email'	=> 'user@gmail.com',
            'password'	=> Hash::make("12345"),
            'role' => 'user',
        ]);
        User::create([
            'name'	=> 'John',
            'email'	=> 'john@gmail.com',
            'password'	=> Hash::make("12345"),
            'role' => 'user',
        ]);
        User::create([
            'name'	=> 'Luffy',
            'email'	=> 'luffy@gmail.com',
            'password'	=> Hash::make("12345"),
            'role' => 'user',
        ]);
        User::create([
            'name'	=> 'Shanks',
            'email'	=> 'shanks@gmail.com',
            'password'	=> Hash::make("12345"),
            'role' => 'user',
        ]);
    }
}
