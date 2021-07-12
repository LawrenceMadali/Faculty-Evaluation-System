<?php

namespace App\Models;

use App\Models\Spe;
use App\Models\Role;
use App\Models\Course;
use App\Models\PeerRatingForm;
use App\Models\YearAndSection;
use App\Models\StudentRatingForm;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'role_id',
        'id_number',
        'name',
        'email',
        'password',
        'status',
        'college_id',
        'year_and_section_id',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['role_id', 'id_number', 'name',
                   'email'  , 'status'   , 'college_id',
                   'year_and_section_id' , ])
        ->logOnlyDirty()
        ->useLogName('Manage account')
        ->setDescriptionForEvent(fn(string $eventName) => "{$eventName} by ".Auth::user()->name);
    }

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
        'properties',
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
        ->orWhere('college_id', 'LIKE' , '%'.$search.'%')
        ->orWhere('email', 'LIKE' , '%'.$search.'%')
        ->orwhere('created_at', 'LIKE' , '%'.$search.'%');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function peerRatingForm()
    {
        return $this->hasOne(PeerRatingForm::class);
    }

    public function studentRatingForm()
    {
        return $this->hasOne(StudentRatingForm::class);
    }

    public function yearAndSections()
    {
        return $this->belongsTo(YearAndSection::class, 'year_and_section_id');
    }

    public function colleges()
    {
        return $this->belongsTo(College::class, 'college_id');
    }

    public function spes()
    {
        return $this->belongsToMany(Spe::class, 'spe_users');
    }

    public function sses()
    {
        return $this->belongsToMany(Sse::class, 'sse_users');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
