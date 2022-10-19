<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'zeeshan',
            'email' => 'mughalzeeshan695@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
        ]);
    }
}
