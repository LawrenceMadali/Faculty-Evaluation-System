<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\Course;
use Livewire\Component;
use App\Models\CourseCode;
use App\Models\Instructor;
use App\Models\Semester;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class CourseCodeProperty extends Component
{
    use WithPagination;

    public $course_id;
    public $semester_id;
    public $course_code;
    public $instructor_id;
    public $year_and_section_id;

    public $editModal = false;
    public $createModal = false;

    public function create()
    {
        $validated = $this->validate([
            'instructor_id'         => 'required',
            'semester_id'           => 'required',
            'course_code'           => 'required|unique:course_codes,course_code,NULL,id,course_id,'.$this->course_id.',year_and_section_id,'.$this->year_and_section_id.',semester_id,'.$this->semester_id.',instructor_id,'.$this->instructor_id,
            'course_id'             => 'required',
            'year_and_section_id'   => 'required',
        ],
        [
            'instructor_id.required'        => 'The instructor field is required.',
            'course_id.required'            => 'The course field is required.',
            'year_and_section_id.required'  => 'The year and section field is required.',
            'semester_id.required'          => 'The semester field is required.',
            'unique' => 'The :attribute is already exist.',
        ]);

        CourseCode::create($validated);
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
        $this->CourseCodeId         = $id;
        $CourseCodeId               = CourseCode::find($this->CourseCodeId);
        $this->course_id            = $CourseCodeId->course_id;
        $this->course_code          = $CourseCodeId->course_code;
        $this->instructor_id        = $CourseCodeId->instructor_id;
        $this->semester_id          = $CourseCodeId->semester_id;
        $this->year_and_section_id  = $CourseCodeId->year_and_section_id;
        $this->resetValidation();
        $this->editModal = true;
    }

    public function update()
    {
        $validated = $this->validate([
            'course_code'           => 'required|unique:course_codes,course_code,'.$this->CourseCodeId,
            'instructor_id'         => 'required',
            'course_id'             => 'required',
            'semester_id'           => 'required',
            'year_and_section_id'   => 'required',
        ],
        ['unique' => 'The :attribute is already exist.']);

            CourseCode::find($this->CourseCodeId)->update($validated);
            $this->resetValidation();
            $this->emit('updated');

            $this->reset();
            $this->resetValidation();
    }

    public function closeModal()
    {
        $this->createModal = false;
        $this->editModal = false;
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.course-code-property',[
            'ccs'               => CourseCode::with('instructors', 'courses', 'year_and_sections')
                                ->latest('id')
                                ->paginate(5),
            'instructors'       => Instructor::all(),
            'courses'           => Course::all(),
            'year_and_sections' => YearAndSection::all(),
            'semesters'         => Semester::all(),
        ]);
    }
}
