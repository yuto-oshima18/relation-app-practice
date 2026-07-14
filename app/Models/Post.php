<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //追加
    public function comments() { return $this->hasMany(Comment::class); }
    public function tags() { return $this->belongsToMany(Tag::class); }

    protected $fillable = [
        'title',
        'content',
    ];

}
