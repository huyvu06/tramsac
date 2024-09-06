<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('news')->insert([
                'title' => Str::random(10), // Tạo tiêu đề ngẫu nhiên
                'image' => 'path/to/image' . $i . '.jpg', // Đường dẫn hình ảnh ngẫu nhiên
                'content' => Str::random(50), // Nội dung ngẫu nhiên
                'binhluan' => rand(0, 100), // Số lượng bình luận ngẫu nhiên
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
