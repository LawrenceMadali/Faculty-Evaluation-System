<?php

namespace App\Http\Livewire\Administrator\EvaluationPage;

use App\Models\Spe;
use App\Models\User;
use Livewire\Component;
use App\Models\Semester;
use App\Models\SchoolYear;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class SetPeerEvaluationPage extends Component
{
    use WithPagination;

    public $openModal = false;
    public $user_id;

    public function closeModal()
    {
        $this->openModal = false;
        $this->reset();
        $this->resetValidation();
    }


    // Select all or select 100%
    public $selectedInstructor = [];
    public $select100 = false;

    public function updatedSelect100($value)
    {
        if ($value) {
            $this->selectedInstructor = User::where(['role_id' => 4])
            ->where('id', '!=', $this->user_id)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 90%
    public $select90 = false;

    public function updatedSelect90($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .90 * $instructorCount;
        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 80%
    public $select80 = false;

    public function updatedSelect80($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .80 * $instructorCount;
        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 70%
    public $select70 = false;

    public function updatedSelect70($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .70 * $instructorCount;
        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 60%
    public $select60 = false;

    public function updatedSelect60($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .60 * $instructorCount;

        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 50%
    public $select50 = false;

    public function updatedSelect50($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .50 * $instructorCount;

        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 40%
    public $select40 = false;

    public function updatedSelect40($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .40 * $instructorCount;

        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 30%
    public $select30 = false;

    public function updatedSelect30($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .30 * $instructorCount;

        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }

    // Select all or select 20%
    public $select20 = false;

    public function updatedSelect20($value)
    {
        $instructorCount = User::where('role_id', 4)
        ->where('id', '!=', $this->user_id)
        ->count();
        $percentage = .20 * $instructorCount;

        if ($value) {
            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }
    // Select all or select 10%
    public $select10 = false;

    public function updatedSelect10($value)
    {

        if ($value) {
            $instructorCount = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->count();
            $percentage = $instructorCount * .10;

            $this->selectedInstructor = User::where('role_id', 4)
            ->where('id', '!=', $this->user_id)
            ->inRandomOrder()
            ->take($percentage)
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedInstructor = [];
        }
    }



    public function updatedselectedInstructor()
    {
        $this->select100 = false;
        $this->select90 = false;
        $this->select80 = false;
        $this->select70 = false;
        $this->select60 = false;
        $this->select50 = false;
        $this->select40 = false;
        $this->select30 = false;
        $this->select20 = false;
        $this->select10 = false;
    }

    public $name;
    public $school_year;
    public $semester;
    public $year_and_section;

    public function create()
    {
        $this->validate([
            'user_id'            => 'required',
            'school_year'        => 'required|unique:school_years,name,NULL,id,'.$this->school_year,
            'semester'           => 'required',
            'selectedInstructor' => 'required',
        ],[
            'selectedInstructor.required' => 'The instructor number checkbox field is required.',
            'user_id.required' => 'The instructor field is required.'
        ]);

        $evaluator = Spe::create([
            'school_year_id'    => $this->school_year,
            'semester_id'       => $this->semester,
            'user_id'           => $this->user_id,
            'name'              => $this->name,
        ]);
        $this->emit('created');
        $evaluator->users()->sync($this->selectedInstructor);
        $this->openModal = false;
        $this->reset();
        $this->resetValidation();

    }


    public function updatedUserId()
    {
        $this->selectedInstructor = [];
        $this->select100 = false;
        $this->select80 = false;
        $this->select60 = false;
        $this->select40 = false;
        $this->select20 = false;
        $this->select10 = false;

        $name = User::find($this->user_id);
        $this->name = $name->name ?? null;
    }

    public function render()
    {
        return view('livewire.administrator.evaluation-page.set-peer-evaluation-page',[
            'instructors'   => User::where('role_id', 4)->get(),
            'evaluatees'    => User::where('role_id', 4)->get(),

            'instructorCount' => User::where(['role_id' => 4])
                            ->where('id', '!=', $this->user_id)
                            ->count(),
            'sems'          => Semester::all(),
            'schoolYears'   => SchoolYear::all(),
            'peerCounts'    => Spe::count(),
            'spes'          => Spe::with('schoolYears', 'instructors', 'semesters',
                                         'courses', 'yearSections', 'CourseCodes')
            ->latest('id')
            ->paginate(5),

            ]);
    }
}
