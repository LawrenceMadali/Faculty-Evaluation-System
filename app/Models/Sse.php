<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_number',
        'sse_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
