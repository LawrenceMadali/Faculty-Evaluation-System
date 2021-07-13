<?php

namespace App\Http\Livewire\Administrator\ManageResults;

use App\Models\Instructor;
use App\Models\PeerRatingForm;
use App\Models\Results;
use App\Models\SchoolYear;
use App\Models\Semester;
use App\Models\StudentRatingForm;
use Livewire\Component;

class ManageResult extends Component
{
    public $instructor;
    public $semester_id;
    public $school_year_id;
    public $totalPrfScale;
    public $totalSrfScale;
    public $supervisor;
    public $ipcr;
    public $total;

    public function updatedInstructor()
    {
        $faculties = PeerRatingForm::where('spe_id', $this->instructor)->find($this->instructor);
        $this->school_year_id = $faculties->school_year_id ?? null;
        $this->semester_id = $faculties->semester_id ?? null;

        $prfResults = PeerRatingForm::where([
            'spe_id'        => $this->instructor,
            'semester_id'   => $this->semester_id,
            'school_year_id'=> $this->school_year_id,
                            ])->avg('scale');

        $srfResults = StudentRatingForm::where([
            'sse_id'        => $this->instructor,
            'semester_id'   => $this->semester_id,
            'school_year_id'=> $this->school_year_id,
                            ])->avg('scale');

        $this->totalSrfScale = number_format(($srfResults), 2);
        $this->totalPrfScale = number_format(($prfResults), 2);
    }

    public function computation()
    {
        $this->total = ($this->totalPrfScale + $this->totalSrfScale + $this->supervisor + $this->ipcr) / 4 ?? null;
    }

    public function submitResult()
    {
        $this->validate([
            'instructor'    => 'required',
            'totalPrfScale' => 'required',
            'totalSrfScale' => 'required',
            'supervisor'    => 'required',
            'ipcr'          => 'required',
        ]);

        Results::create([
            'semester_id' => $this->semester_id,
            'school_year_id' => $this->school_year_id,
            'spe_id' => $this->instructor,
            'peer_evaluation_result' => $this->totalPrfScale,
            'student_evaluation_result' => $this->totalSrfScale,
            'supervisor' => $this->supervisor,
            'ipcr' => $this->ipcr,
            'total' => ($this->totalPrfScale + $this->totalSrfScale + $this->supervisor + $this->ipcr) / 4,
        ]);

        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-results.manage-result',
        [
            'instructors' => Instructor::all(),
        ]);
    }
}
