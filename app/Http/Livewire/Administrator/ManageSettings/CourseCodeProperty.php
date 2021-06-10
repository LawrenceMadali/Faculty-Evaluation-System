<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\User;
use App\Models\Course;
use Livewire\Component;
use App\Models\CourseCode;
use App\Models\Instructor;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class CourseCodeProperty extends Component
{
    use WithPagination;

    public $course_code;
    public $instructor_id;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'course_code'   => 'required|unique:course_codes',
        'instructor_id' => 'required',
    ];

    protected $messages = [
        'instructor_id.required' => 'The instructor field is required.'
    ];

    public function create()
    {
        $this->validate();

        CourseCode::create([
            'course_code'   => $this->course_code,
            'instructor_id' => $this->instructor_id,
        ]);
        $this->reset();
        $this->resetValidation();
        $this->emit('added');
    }

    public function createOpenModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->createModal = true;
    }

    public $CourseCodeId;

    public function editOpenModal($id)
    {
        $this->CourseCodeId = $id;
        $CourseCodeId       = CourseCode::find($this->CourseCodeId);
        $this->course_code  = $CourseCodeId->course_code;
        $this->course_code_id  = $CourseCodeId->course_code_id;
        $this->instructor_id= $CourseCodeId->instructor_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $validated = $this->validate([
            'course_code'   => 'required',
            'instructor_id' => 'required',
            ]);
            CourseCode::find($this->CourseCodeId)->update($validated);
            $this->resetValidation();
            $this->emit('updated');
    }

    public function closeModal()
    {
        $this->createModal = false;
        $this->editModal = false;
        $this->reset();
        $this->resetValidation();
    }

    // year and section
    public $year_and_section;
    public $course_code_id;
    public function submitYearAndSection()
    {
        $this->validate([
            'year_and_section' => 'required',
            'course_code_id' => 'required',
        ]);

        YearAndSection::updateOrCreate([
            'instructor_id' => $this->instructor_id,
            'course_code_id' => $this->course_code_id,
            'year_and_section' => $this->year_and_section,

        ]);
        $this->year_and_section = '';
        $this->resetValidation();
        $this->emit('saved');
    }

    public function remove($id)
    {
        $this->CourseCodeId = $id;
        $CourseCodeId = YearAndSection::find($this->CourseCodeId)->destroy($this->CourseCodeId);
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.course-code-property',[
            'ccs'           => CourseCode::with('instructors')->paginate(5),
            'courseCodes'   => CourseCode::all(),
            'instructors'   => User::where('role_id', 4)->get(),
            'yearAndSections'=> YearAndSection::where('course_code_id', $this->CourseCodeId)->get(),
        ]);
    }
}
