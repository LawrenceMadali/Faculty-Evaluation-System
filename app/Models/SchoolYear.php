<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function spe()
    {
        return $this->hasMany(Spe::class);
    }

    public function sse()
    {
        return $this->hasMany(Spe::class);
    }

}
