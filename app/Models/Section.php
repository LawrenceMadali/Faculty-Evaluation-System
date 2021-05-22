<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'college',
        'course',
        'semester',
        'yearLevel',
        'instructor',
        'user_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

   public function user()
   {
       return $this->belongsToMany(User::class);
   }
}
