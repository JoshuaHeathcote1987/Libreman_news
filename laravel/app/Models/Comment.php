<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function thumbs()
    {
        return $this->hasMany(Thumb::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
