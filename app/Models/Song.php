<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'lyric',
        'singer',
        'description',
        'category_id',
        'status',
        'album',
        'genre'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
