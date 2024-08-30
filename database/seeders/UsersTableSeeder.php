<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'images' => 'path/to/image' . $i . '.jpg',
                'phone' => '0123456789',
                'email' => 'user' . $i . '@example.com',
                'role' => 'user',
                'id_tramsac' => null,
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
