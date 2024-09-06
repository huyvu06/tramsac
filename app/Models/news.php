<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $table = "news";


    protected $fillable = [
        "id_news",
        "title",
        "image",
        "content",
        "date_up",
        "date_edit",
        "binhluan",
        "created_at",
        "updated_at"
    ];
}
