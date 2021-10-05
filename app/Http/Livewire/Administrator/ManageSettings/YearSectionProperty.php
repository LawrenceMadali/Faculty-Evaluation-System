<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\Course;
use Livewire\Component;
use App\Models\Instructor;
use App\Models\InstructorYearAndSection;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class YearSectionProperty extends Component
{
    use WithPagination;

    public $course_id;
    public $instructor_id;
    public $year_and_section;
    public $createModal = false;
    public $editModal = false;

    public $search = '';

    public function updatedCourseId()
    {
        $courses = Course::find($this->course_id);
        $this->instructor_id = $courses->instructor_id;
    }

    public function create()
    {
        $validated = $this->validate([
            'year_and_section'  => 'required|unique:year_and_sections,year_and_section,NULL,id,course_id,'.$this->course_id,
            'course_id'         => 'required',
        ],
        [
            'unique' => 'The :attribute is already exist.'
        ]);

        $yrSection =  YearAndSection::create($validated);

        $yrSection->yrSecInstructors()->sync($this->instructor_id);
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

    public $yearAndSectionId;

    public function editOpenModal($id)
    {
        $this->yearAndSectionId = $id;
        $yrSec                  = YearAndSection::find($this->yearAndSectionId);
        $this->course_id        = $yrSec->course_id;
        $this->instructor_id    = $yrSec->instructor_id;
        $this->year_and_section = $yrSec->year_and_section;

        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $validated = $this->validate([
            'year_and_section'  => 'required|unique:year_and_sections,year_and_section,'.$this->yearAndSectionId,
            'course_id'         => 'required',
        ],
        ['unique' => 'The :attribute is already exist.']);
        YearAndSection::find($this->yearAndSectionId)->update($validated);
        $yearSec = YearAndSection::find($this->yearAndSectionId);
        $yearSec->yrSecInstructors()->sync($this->instructor_id, ['instructor_id' => $this->instructor_id], false);
        $this->reset();
        $this->resetValidation();
        $this->emit('updated');
    }

    public function closeModal()
    {
        $this->editModal = false;
        $this->createModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-settings.year-section-property', [
            'yrSecs'    => YearAndSection::search($this->search)
                        ->with('instructors', 'courses')
                        ->latest()
                        ->paginate(5),
            'courses'    => Course::with('instructors')->get(),
            'instructors'=> Instructor::all(),
        ]);
    }
}
