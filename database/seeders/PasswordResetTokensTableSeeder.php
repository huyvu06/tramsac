<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PasswordResetTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for ($i = 0; $i < 20; $i++) {
            DB::table('password_reset_tokens')->insert([
                'email' => 'user' . $i . '@example.com',
                'token' => Str::random(64),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
