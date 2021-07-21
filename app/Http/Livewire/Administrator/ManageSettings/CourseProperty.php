<?php

namespace App\Http\Livewire\Administrator\ManageSettings;




use App\Models\Course;
use App\Models\Instructor;
use Livewire\Component;
use Livewire\WithPagination;

class CourseProperty extends Component
{
    use WithPagination;

    public $course;
    public $instructor_id;
    public $createModal = false;
    public $editModal = false;

    public function create()
    {
        $validated = $this->validate([
            'course'        => 'required|unique:courses',
            'instructor_id' => 'required',
        ],
        [
            'instructor_id.required' => 'The instructor field is required.',
            'unique' => 'The :input is already exist.'
        ]);

        Course::create($validated);
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

    public $courseId;

    public function editOpenModal($id)
    {
        $this->courseId = $id;
        $courseId           = Course::find($this->courseId);
        $this->course         = $courseId->course;
        $this->instructor_id   = $courseId->instructor_id;
        $this->resetValidation();

        $this->editModal = true;
    }


    public function update()
    {
        $validated = $this->validate([
            'course'      => 'required|unique:courses,course,'.$this->courseId,
            'instructor_id'=> 'required'
        ],
        [
            'instructor_id.required' => 'The instructor field is required.',
            'unique' => 'The :input is already exist.'
        ]);

        Course::find($this->courseId)->update($validated);
        $this->reset();
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

    public function render()
    {
        return view('livewire.administrator.manage-settings.course-property',[
            'courses'   => Course::with('instructors')
            ->latest('id')
            ->paginate(5),
            'faculties' => Instructor::all(),
        ]);
    }
}
