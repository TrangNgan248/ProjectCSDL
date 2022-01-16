<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use HasFactory;
    protected $table = 'blogs';

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
