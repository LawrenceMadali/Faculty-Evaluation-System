<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
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
    protected $guard = 'student';

    protected $fillable = [
        'role_id',
        'user_id',
        'id_number',
        'name',
        'email',
        'password',
        'user_status_id',
        'college_id',
        'course_id',
        'year_and_section_id',

    ];

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()
        ->where('id_number',            'LIKE' , '%'.$search.'%')
        ->orWhere('name',               'LIKE' , '%'.$search.'%')
        ->orWhere('user_status_id',     'LIKE' , '%'.$search.'%')
        ->orWhere('college_id',         'LIKE' , '%'.$search.'%')
        ->orWhere('year_and_section_id','LIKE' , '%'.$search.'%')
        ->orWhere('email',              'LIKE' , '%'.$search.'%')
        ->orwhere('created_at',         'LIKE' , '%'.$search.'%');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
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

    public function userStatuses()
    {
        return $this->belongsTo(UserStatus::class, 'user_status_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
