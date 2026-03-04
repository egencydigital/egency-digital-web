<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    protected $table = 'teams';
    protected $fillable = [
        'name',
        'role',
        'socialLinks',
        'picture',
        'description'
    ];
    protected $casts = [
        'socialLinks' => 'array', // auto convert JSON to array
    ];
}
