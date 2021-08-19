<?php

namespace App\Http\Livewire\Administrator\ManageReports;

use App\Exports\ReportsExport;
use App\Exports\ResultExport;
use App\Models\Instructor;
use App\Models\ReportGroupList;
use App\Models\Results;
use App\Models\SchoolYear;
use App\Models\Semester;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;

class Report extends Component
{
    public $viewModal = false;
    public $semester;
    public $resultId;
    public $college_id;
    public $school_year;

    public $semesters = null;
    public $instructors = null;
    public $school_years = null;

    public $selectAll = false;
    public $selectedExport= [];

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedExport = Results::where(['semester_id' => $this->semester, 'school_year_id' => $this->school_year])
            ->with('semesters','school_years', 'instructors')
            ->when($this->instructors, function($query){$query->where('instructor_id', $this->instructors);})
            ->when($this->school_years, function($query){$query->where('school_year_id', $this->school_years);})
            ->when($this->semesters, function($query){$query->where('semester_id', $this->semesters);})
            ->pluck('id')
            ->map(fn($id) => (string)$id)->toArray();
        } else {
            $this->selectedExport = [];
        }
    }

    public function updatedInstructors()
    {
        $this->selectedExport = [];
        $this->selectAll = false;
    }

    public function updatedSelectedExport()
    {
        $this->selectAll = false;
    }

    public function openViewModal($id)
    {
        $this->resultId = $id;
        $reportList         = ReportGroupList::find($this->resultId);
        $this->semester     = $reportList->semester_id;
        $this->school_year  = $reportList->school_year_id;
        $this->college_id   = $reportList->college_id;

        $this->viewModal = true;
        $this->instructors = null;
        $this->school_years = null;
        $this->semesters = null;

        $this->selectedExport = [];
        $this->selectAll = false;
    }

    public function closeModal()
    {
        $this->viewModal = false;
    }

    public function generate()
    {
        $date = now();

        return Excel::download(new ReportsExport($this->selectedExport), 'report-'.$date.'.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        activity()
            ->causedBy(Auth::user()->id)
            ->event('export')
            ->log('Report exported by '.Auth::user()->name);
    }

    public function render()
    {
        return view('livewire.administrator.manage-reports.report', [
            'results' => Results::where([
                        'semester_id' => $this->semester,
                        'school_year_id' => $this->school_year])
                        ->with('semesters','school_years', 'instructors')
                        ->when($this->instructors, function($query){
                            $query->where('instructor_id', $this->instructors);
                        })
                        ->when($this->semesters, function($query){
                            $query->where('semester_id', $this->semesters);
                        })
                        ->when($this->school_years, function($query){
                            $query->where('school_year_id', $this->school_years);
                        })
                        ->latest('total')
                        ->get(),
            'resultList' => ReportGroupList::with('semesters', 'school_years')
                        ->latest()
                        ->get(),
            'faculties' => Instructor::all(),
            'count'     => count($this->selectedExport),
        ]);
    }
}
