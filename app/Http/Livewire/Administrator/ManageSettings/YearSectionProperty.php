<?php

namespace App\Http\Livewire\Administrator\ManageSettings;

use App\Models\User;
use Livewire\Component;
use App\Models\Course;
use Livewire\WithPagination;
use App\Models\YearAndSection;

class YearSectionProperty extends Component
{
    use WithPagination;

    public $name;
    public $course_id;
    public $createModal = false;
    public $editModal = false;

    protected $rules = [
        'name'          => 'required',
        'course_id'=> 'required',
    ];

    public function create()
    {
        $this->validate();

        YearAndSection::create([
            'name'          => $this->name,
            'course_id'=> $this->course_id,
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

    public $yrSec;

    public function editOpenModal($id)
    {
        $this->yrSec = $id;
        $yrSec = YearAndSection::find($this->yrSec);
        $this->name             = $yrSec->name;
        $this->course_id   = $yrSec->course_id;
        $this->resetValidation();

        $this->editModal = true;
    }

    public function update()
    {
        $yearNsection = $this->validate([
            'name'          => 'required',
            'course_id'=> 'required'
        ]);
        YearAndSection::find($this->yrSec)->update($yearNsection);
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
            'yrSecs'=> YearAndSection::with('courses')->paginate(5),
            'Courses' => Course::all()
        ]);
    }
}
