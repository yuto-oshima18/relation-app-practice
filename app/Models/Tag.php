<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //追加
    public function posts() { return $this->belongsToMany(Post::class); }

    protected $fillable = [
        'name',
    ];
}
