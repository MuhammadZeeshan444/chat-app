<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            'messege' => 'hi',
            'sender_id' => '1',
            'receiver_id' => '2',
            'status' => '0'
        ]);
        DB::table('chats')->insert([
            'messege' => 'how are you?',
            'sender_id' => '1',
            'receiver_id' => '2',
            'status' => '0'
        ]);
        DB::table('chats')->insert([
            'messege' => 'hello',
            'sender_id' => '2',
            'receiver_id' => '1',
            'status' => '0'
        ]);
        DB::table('chats')->insert([
            'messege' => 'i am fine',
            'sender_id' => '2',
            'receiver_id' => '1',
            'status' => '0'
        ]);

    }
}
