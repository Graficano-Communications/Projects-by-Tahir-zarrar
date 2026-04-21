<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Compete Sports',
        //     'email' => 'admin@compete-sports.co',
        //     'password' => Hash::make('ComPete@Sports'),
        //     'role' => 'admin', // Ensure your users table has a role column
        //     'remember_token' => Str::random(10),
        // ]);
    }

   
}
