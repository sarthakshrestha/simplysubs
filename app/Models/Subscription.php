<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['title', 'description', 'image'];
    protected $casts = [
        'image' => 'string',
    ];

    use HasFactory;
}
