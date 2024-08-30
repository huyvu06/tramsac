<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PersonalAccessTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('personal_access_tokens')->insert([
                'tokenable_type' => 'App\Models\User',
                'tokenable_id' => rand(1, 20), // Giả sử bạn có 20 người dùng
                'name' => 'API Token',
                'token' => hash('sha256', Str::random(80)),
                'abilities' => '["*"]',
                'last_used_at' => Carbon::now(),
                'expires_at' => Carbon::now()->addDays(30),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
