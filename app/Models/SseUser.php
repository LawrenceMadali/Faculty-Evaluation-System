<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SseUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sse_id'
    ];
    
}
