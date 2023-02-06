<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_completed'
    ];

    protected $hidden = [
        'create_at',
        'update_at'
    ];
}
