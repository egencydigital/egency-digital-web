<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'user_id',
        'title',
        'image',
        'description',
        'author',
        'status',
        'type'
    ];
}
