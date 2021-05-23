<?php

namespace App\Models;

use App\Models\Spe;
use App\Models\Role;
use App\Models\Section;
use App\Models\PeerRatingForm;
use App\Models\YearAndSection;
use App\Models\StudentRatingForm;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'id_number',
        'name',
        'college',
        'email',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()
        ->where('id_number', 'LIKE' , '%'.$search.'%')
        ->orWhere('name', 'LIKE' , '%'.$search.'%')
        ->orWhere('email', 'LIKE' , '%'.$search.'%')
        ->orwhere('created_at', 'LIKE' , '%'.$search.'%');
    }

    public function role()
    {
        return $this->hasMany(Role::class);
    }

    public function peerRatingForm()
    {
        return $this->hasOne(PeerRatingForm::class);
    }

    public function studentRatingForm()
    {
        return $this->hasOne(StudentRatingForm::class);
    }

    public function yrAndSec()
    {
        return $this->hasMany(YearAndSection::class);
    }
    public function spes()
    {
        return $this->belongsToMany(Spe::class, 'spe_users');
    }


}
