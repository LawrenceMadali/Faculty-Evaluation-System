<?php

namespace App\Http\Livewire\Administrator\ManageReports;

use App\Exports\ResultExport;
use App\Models\ReportGroupList;
use App\Models\Results;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;

class Report extends Component
{
    public $viewModal = false;
    public $semester;
    public $school_year;
    public $resultId;

    public function openViewModal($id)
    {
        $this->resultId = $id;
        $reportList = ReportGroupList::find($this->resultId);
        $this->semester = $reportList->semester_id;
        $this->school_year = $reportList->school_year_id;

        $this->viewModal = true;
    }

    public function closeModal()
    {
        $this->viewModal = false;
    }

    public function getId()
    {
        return $this->resultId;
    }

    public function generate()
    {
        return Excel::download(new ResultExport($this->getId()), 'report.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        activity()
            ->causedBy(Auth::user())
            ->event('export')
            ->log('Report exported by '.Auth::user()->name);
    }

    public function render()
    {
        return view('livewire.administrator.manage-reports.report', [
            'results' => Results::where([
                        'semester_id' => $this->semester,
                        'school_year_id' => $this->school_year])
                        ->with('semesters','school_years')
                        ->latest('total')
                        ->get(),
            'resultList' => ReportGroupList::with('semesters', 'school_years')->get(),
        ]);
    }
}
