<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\College
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|College newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|College newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|College query()
 */
	class College extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Course
 *
 * @property int $id
 * @property int $instructor_id
 * @property string $course
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Instructor $instructors
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CourseCode
 *
 * @property int $id
 * @property string $course_code
 * @property int $instructor_id
 * @property int $course_id
 * @property int $year_and_section_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course $courses
 * @property-read \App\Models\Instructor $instructors
 * @property-read \App\Models\YearAndSection $year_and_sections
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCode query()
 */
	class CourseCode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Instructor
 *
 * @property int $id
 * @property string $name
 * @property int $id_number
 * @property int $is_regular
 * @property int $college_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CourseCode $CourseCodes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\College $colleges
 * @property-read \App\Models\PeerRatingForm $prfs
 * @property-read \App\Models\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Instructor query()
 */
	class Instructor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PeerQuestionairForm
 *
 * @property int $id
 * @property string $name
 * @property string $semester
 * @property string $school_year
 * @property int $is_enabled
 * @property string $A_Question_1
 * @property string $A_Question_2
 * @property string $A_Question_3
 * @property string $A_Question_4
 * @property string $A_Question_5
 * @property string $B_Question_1
 * @property string $B_Question_2
 * @property string $B_Question_3
 * @property string $B_Question_4
 * @property string $B_Question_5
 * @property string $C_Question_1
 * @property string $C_Question_2
 * @property string $C_Question_3
 * @property string $C_Question_4
 * @property string $C_Question_5
 * @property string $D_Question_1
 * @property string $D_Question_2
 * @property string $D_Question_3
 * @property string $D_Question_4
 * @property string $D_Question_5
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|PeerQuestionairForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeerQuestionairForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeerQuestionairForm query()
 */
	class PeerQuestionairForm extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PeerRatingForm
 *
 * @property int $id
 * @property string $name
 * @property int $id_number
 * @property int $spe_id
 * @property int $college_id
 * @property int $semester_id
 * @property int $school_year_id
 * @property int $evaluator_number
 * @property int $commitment_1
 * @property int $commitment_2
 * @property int $commitment_3
 * @property int $commitment_4
 * @property int $commitment_5
 * @property int $knowledge_of_subject_1
 * @property int $knowledge_of_subject_2
 * @property int $knowledge_of_subject_3
 * @property int $knowledge_of_subject_4
 * @property int $knowledge_of_subject_5
 * @property int $teaching_for_independent_learning_1
 * @property int $teaching_for_independent_learning_2
 * @property int $teaching_for_independent_learning_3
 * @property int $teaching_for_independent_learning_4
 * @property int $teaching_for_independent_learning_5
 * @property int $management_of_learning_1
 * @property int $management_of_learning_2
 * @property int $management_of_learning_3
 * @property int $management_of_learning_4
 * @property int $management_of_learning_5
 * @property int $commitment_total
 * @property int $knowledge_of_subject_total
 * @property int $teaching_for_independent_learning_total
 * @property int $management_of_learning_total
 * @property string|null $comments
 * @property int $total
 * @property int $scale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\SchoolYear $schoolYears
 * @property-read \App\Models\Semester $semesters
 * @property-read \App\Models\Spe $spes
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|PeerRatingForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeerRatingForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PeerRatingForm query()
 */
	class PeerRatingForm extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReportGroupList
 *
 * @property int $id
 * @property int $semester_id
 * @property int $college_id
 * @property int $school_year_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\College $colleges
 * @property-read \App\Models\SchoolYear $school_years
 * @property-read \App\Models\Semester $semesters
 * @method static \Illuminate\Database\Eloquent\Builder|ReportGroupList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportGroupList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReportGroupList query()
 */
	class ReportGroupList extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Results
 *
 * @property int $id
 * @property string $name
 * @property int $id_number
 * @property int $college_id
 * @property int $semester_id
 * @property int $instructor_id
 * @property int $school_year_id
 * @property int $is_release
 * @property float $student_evaluation_result
 * @property float $peer_evaluation_result
 * @property float $supervisor
 * @property float $ipcr
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\College $colleges
 * @property-read \App\Models\Instructor $instructors
 * @property-read \App\Models\SchoolYear $school_years
 * @property-read \App\Models\Semester $semesters
 * @method static \Database\Factories\ResultsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Results newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Results newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Results query()
 */
	class Results extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchoolYear
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Spe[] $spe
 * @property-read int|null $spe_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Spe[] $sse
 * @property-read int|null $sse_count
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolYear query()
 */
	class SchoolYear extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Semester
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SchoolYear $schoolYears
 * @method static \Illuminate\Database\Eloquent\Builder|Semester newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Semester newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Semester query()
 */
	class Semester extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Spe
 *
 * @property int $id
 * @property string $name
 * @property int $id_number
 * @property int $college_id
 * @property int $user_id
 * @property int $semester_id
 * @property int $school_year_id
 * @property int $is_active
 * @property int $evaluatee
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CourseCode $CourseCodes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course $courses
 * @property-read \App\Models\User $instructors
 * @property-read \App\Models\SchoolYear $schoolYears
 * @property-read \App\Models\Semester $semesters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @property-read \App\Models\YearAndSection $yearSections
 * @method static \Illuminate\Database\Eloquent\Builder|Spe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Spe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Spe query()
 */
	class Spe extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SpeUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $spe_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SpeUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpeUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpeUser query()
 */
	class SpeUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sse
 *
 * @property int $id
 * @property string $name
 * @property int $id_number
 * @property int $college_id
 * @property int $instructor_id
 * @property int $school_year_id
 * @property int $semester_id
 * @property int $course_id
 * @property int $year_and_section_id
 * @property int $course_code_id
 * @property int $is_active
 * @property int $evaluatee
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CourseCode $CourseCodes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course $courses
 * @property-read \App\Models\Instructor $instructors
 * @property-read \App\Models\SchoolYear $schoolYears
 * @property-read \App\Models\Semester $semesters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @property-read \App\Models\YearAndSection $yearSections
 * @method static \Illuminate\Database\Eloquent\Builder|Sse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sse query()
 */
	class Sse extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SseUser
 *
 * @property int $id
 * @property int $user_id
 * @property int $sse_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SseUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SseUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SseUser query()
 */
	class SseUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentQuestionairForm
 *
 * @property int $id
 * @property string $name
 * @property string $semester
 * @property string $school_year
 * @property int $is_enabled
 * @property string $A_Question_1
 * @property string $A_Question_2
 * @property string $A_Question_3
 * @property string $A_Question_4
 * @property string $A_Question_5
 * @property string $B_Question_1
 * @property string $B_Question_2
 * @property string $B_Question_3
 * @property string $B_Question_4
 * @property string $B_Question_5
 * @property string $C_Question_1
 * @property string $C_Question_2
 * @property string $C_Question_3
 * @property string $C_Question_4
 * @property string $C_Question_5
 * @property string $D_Question_1
 * @property string $D_Question_2
 * @property string $D_Question_3
 * @property string $D_Question_4
 * @property string $D_Question_5
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @method static \Illuminate\Database\Eloquent\Builder|StudentQuestionairForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentQuestionairForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentQuestionairForm query()
 */
	class StudentQuestionairForm extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentRatingForm
 *
 * @property int $id
 * @property string $name
 * @property int $id_number
 * @property int $sse_id
 * @property int $college_id
 * @property int $semester_id
 * @property int $school_year_id
 * @property int $evaluator_number
 * @property int $commitment_1
 * @property int $commitment_2
 * @property int $commitment_3
 * @property int $commitment_4
 * @property int $commitment_5
 * @property int $knowledge_of_subject_1
 * @property int $knowledge_of_subject_2
 * @property int $knowledge_of_subject_3
 * @property int $knowledge_of_subject_4
 * @property int $knowledge_of_subject_5
 * @property int $teaching_for_independent_learning_1
 * @property int $teaching_for_independent_learning_2
 * @property int $teaching_for_independent_learning_3
 * @property int $teaching_for_independent_learning_4
 * @property int $teaching_for_independent_learning_5
 * @property int $management_of_learning_1
 * @property int $management_of_learning_2
 * @property int $management_of_learning_3
 * @property int $management_of_learning_4
 * @property int $management_of_learning_5
 * @property int $commitment_total
 * @property int $knowledge_of_subject_total
 * @property int $teaching_for_independent_learning_total
 * @property int $management_of_learning_total
 * @property string|null $comments
 * @property int $total
 * @property int $scale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Instructor $instructors
 * @property-read \App\Models\SchoolYear $school_years
 * @property-read \App\Models\Semester $semesters
 * @property-read \App\Models\Sse $sses
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRatingForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRatingForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentRatingForm query()
 */
	class StudentRatingForm extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property int $status
 * @property int $role_id
 * @property int|null $college_id
 * @property int|null $year_and_section_id
 * @property int $id_number
 * @property string|null $remember_token
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\College|null $colleges
 * @property-read \App\Models\Course $courses
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\PeerRatingForm|null $peerRatingForm
 * @property-read \App\Models\Role $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Spe[] $spes
 * @property-read int|null $spes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sse[] $sses
 * @property-read int|null $sses_count
 * @property-read \App\Models\StudentRatingForm|null $studentRatingForm
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\YearAndSection|null $yearAndSections
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\YearAndSection
 *
 * @property int $id
 * @property string $year_and_section
 * @property int $instructor_id
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Course $courses
 * @property-read \App\Models\Instructor $instructors
 * @method static \Illuminate\Database\Eloquent\Builder|YearAndSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|YearAndSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|YearAndSection query()
 */
	class YearAndSection extends \Eloquent {}
}

