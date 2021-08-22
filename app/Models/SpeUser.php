<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'spe_id'
    ];
}
