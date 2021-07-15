<?php

namespace App\Http\Livewire\Administrator\ManageResults;

use App\Models\Instructor;
use App\Models\PeerRatingForm;
use App\Models\ReportGroupList;
use App\Models\Results;
use App\Models\StudentRatingForm;
use Livewire\Component;

class ManageResult extends Component
{
    public $ipcr;
    public $total;
    public $id_number;
    public $supervisor;
    public $instructor;
    public $semester_id;
    public $totalPrfScale;
    public $totalSrfScale;
    public $school_year_id;

    public function updatedInstructor()
    {
        $faculties = PeerRatingForm::where('spe_id', $this->instructor)->find($this->instructor);
        $this->school_year_id = $faculties->school_year_id ?? null;
        $this->semester_id = $faculties->semester_id ?? null;
        $this->id_number = $faculties->id_number ?? null;

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
            'ipcr'          => 'required',
            'total'         => 'required',
            'supervisor'    => 'required',
            'instructor'    => 'required',
            'totalPrfScale' => 'required',
            'totalSrfScale' => 'required',
        ]);

        Results::create([
            'ipcr' => $this->ipcr,
            'supervisor' => $this->supervisor,
            'semester_id' => $this->semester_id,
            'id_number' => $this->id_number,
            'instructor_id' => $this->instructor,
            'school_year_id' => $this->school_year_id,
            'peer_evaluation_result' => $this->totalPrfScale,
            'student_evaluation_result' => $this->totalSrfScale,
            'total' => ($this->totalPrfScale + $this->totalSrfScale + $this->supervisor + $this->ipcr) / 4,
        ]);

        ReportGroupList::updateOrCreate([
            'semester_id' => $this->semester_id,
            'school_year_id' => $this->school_year_id,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.administrator.manage-results.manage-result',
        [
            'instructors'   => Instructor::all(),
            'results'       => Results::with('semesters', 'school_years')->get(),
        ]);
    }
}
