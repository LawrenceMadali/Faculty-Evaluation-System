<?php

namespace App\Http\Livewire\Administrator\ManageResults;

use App\Models\PeerRatingForm;
use App\Models\ReportGroupList;
use App\Models\Results;
use App\Models\Spe;
use App\Models\StudentRatingForm;
use Livewire\Component;
use Livewire\WithPagination;

class ManageResult extends Component
{
    use WithPagination;

    public $editModal = false;

    public $name;
    public $ipcr;
    public $total;
    public $id_number;
    public $supervisor;
    public $instructor;
    public $college_id;
    public $semester_id;
    public $totalPrfScale;
    public $totalSrfScale;
    public $school_year_id;

    public $Totals;
    public $resultId;
    public $is_release;

    public function updatedInstructor()
    {
        $faculties = PeerRatingForm::where('spe_id', $this->instructor)->find($this->instructor);
        $this->school_year_id   = $faculties->school_year_id ?? null;
        $this->semester_id      = $faculties->semester_id ?? null;
        $this->id_number        = $faculties->id_number ?? null;
        $this->college_id       = $faculties->college_id ?? null;
        $this->name             = $faculties->name ?? null;

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

        $this->resetValidation();
    }

    public function updatedSupervisor()
    {
        $totalItem = ($this->totalPrfScale + $this->totalSrfScale + $this->supervisor + $this->ipcr) / 4 ?? null;
        $this->total = number_format(($totalItem), 2);
    }

    public function updatedIpcr()
    {
        $totalItem = ($this->totalPrfScale + $this->totalSrfScale + $this->supervisor + $this->ipcr) / 4 ?? null;
        $this->total = number_format(($totalItem), 2);
    }

    public function openEditModal($id)
    {
        $this->resultId = $id;
        $release = Results::find($this->resultId);
        $this->is_release = $release->is_release;
        $this->editModal = true;
    }

    public function update()
    {
        Results::find($this->resultId)
        ->update([
            'is_release' => $this->is_release
        ]);
        $this->emit('updated');
        $this->reset();
    }

    public function submitResult()
    {
        $this->validate([
            'ipcr'          => 'required|lte:5',
            'total'         => 'required',
            'supervisor'    => 'required|lte:5',
            'instructor'    => 'required',
            'totalPrfScale' => 'required',
            'totalSrfScale' => 'required',
        ]);

        Results::create([
            'name'                      => $this->name,
            'ipcr'                      => $this->ipcr,
            'id_number'                 => $this->id_number,
            'supervisor'                => $this->supervisor,
            'college_id'                => $this->college_id,
            'semester_id'               => $this->semester_id,
            'instructor_id'             => $this->instructor,
            'school_year_id'            => $this->school_year_id,
            'peer_evaluation_result'    => $this->totalPrfScale,
            'student_evaluation_result' => $this->totalSrfScale,
            'total'                     => ($this->totalPrfScale + $this->totalSrfScale + $this->supervisor + $this->ipcr) / 4,
        ]);

        ReportGroupList::updateOrCreate([
            'semester_id'   => $this->semester_id,
            'school_year_id'=> $this->school_year_id,
            'college_id'    => $this->college_id,
        ]);
        $this->emit('created');
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.administrator.manage-results.manage-result',
        [
            'instructors'   => Spe::with('schoolYears', 'semesters')->get(),
            'results'       => Results::with('semesters', 'school_years')->latest()->paginate(5),
        ]);
    }
}
