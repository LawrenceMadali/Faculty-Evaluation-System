<?php

namespace App\Models;

use App\Models\CourseCode;
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

    protected $fillable = [
        'user_id',
        'id_number',
        'name',
        'email',
        'password',
        'year_and_section_id',
        'course_code_id',

    ];

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()
        ->where('id_number', 'LIKE' , '%'.$search.'%')
        ->orWhere('name', 'LIKE' , '%'.$search.'%')
        ->orWhere('email', 'LIKE' , '%'.$search.'%')
        ->orwhere('created_at', 'LIKE' , '%'.$search.'%')
        ->orwhere('year_and_section_id', 'LIKE' , '%'.$search.'%')
        ->orwhere('course_code_id', 'LIKE' , '%'.$search.'%');
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

    public function sses()
    {
        return $this->belongsToMany(Sse::class, 'sse_students');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function course_codes()
    {
        return $this->belongsTo(CourseCode::class, 'course_code_id');
    }
}
