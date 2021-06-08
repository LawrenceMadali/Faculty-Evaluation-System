<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\User;
use Livewire\Component;
use App\Models\CourseCode;
use App\Models\Instructor;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class YearSectionProperty extends Component
{
    use WithPagination;

    public $name;
    public $instructor_id;
    public $course_code_id;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name'      => 'required',
        'instructor_id'   => 'required',
    ];

    protected $messages = [
        'instructor_id.required' => 'The instructor field is required',
    ];

    public function create()
    {
        $this->validate();

        YearAndSection::create([
            'name'      => $this->name,
            'instructor_id'   => $this->instructor_id,
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

    public $yearAndSectionId;

    public function editOpenModal($id)
    {
        $this->yearAndSectionId = $id;
        $yearAndSectionId       = YearAndSection::find($this->yearAndSectionId);
        $this->name             = $yearAndSectionId->name;
        $this->instructor_id    = $yearAndSectionId->instructor_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $yearNsection = $this->validate([
            'name'          => 'required',
            'instructor_id' => 'required'
        ]);
        YearAndSection::find($this->yearAndSectionId)->update($yearNsection);
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

    public $course_code;
    public $instructor = null;

    // public function updatedInstructor($instructor)
    // {
    //     $this->courseCodes = CourseCode::where('instructor_id', $this->instructor)->get();
    //     dd($this->courseCodes);
    // }


    public function render()
    {
        return view('livewire.administrator.manage-settings.year-section-property', [
            'yrSecs'=> YearAndSection::with('instructors', 'course_codes')->paginate(5),
            'Course_Codes' => CourseCode::where('course_code', $this->course_code)->with('instructors')->get(),
        ]);
    }
}
