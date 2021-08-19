<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\Course;
use Livewire\Component;
use App\Models\Instructor;
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

    protected $messages = [
        'instructor_id.required' => 'The instructor field is required',
    ];

    public function create()
    {
        $validated = $this->validate([
            'year_and_section'  => 'required|unique:year_and_sections,year_and_section,NULL,id,instructor_id,'.$this->instructor_id.',course_id,'.$this->course_id,
            'instructor_id'     => 'required',
            'course_id'         => 'required',
        ],
        ['unique' => 'The :attribute is already exist.']);

        YearAndSection::create($validated);
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
        $yearAndSectionId       = YearAndSection::find($this->yearAndSectionId);
        $this->year_and_section = $yearAndSectionId->year_and_section;
        $this->instructor_id    = $yearAndSectionId->instructor_id;
        $this->course_id    = $yearAndSectionId->course_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $validated = $this->validate([
            'year_and_section'  => 'required|unique:year_and_sections,year_and_section,'.$this->yearAndSectionId,
            'instructor_id'     => 'required',
            'course_id'         => 'required',
        ],
        ['unique' => 'The :attribute is already exist.']);
        YearAndSection::find($this->yearAndSectionId)->update($validated);
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
            'yrSecs'    => YearAndSection::with('instructors', 'courses')
                        ->latest()
                        ->paginate(5),
            'courses'    => Course::all(),
            'instructors'=> Instructor::all(),
        ]);
    }
}
