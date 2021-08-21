<?php

namespace App\Http\Livewire\Administrator\ManageReports;

use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\AuditTrailExport;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Activitylog\Models\Activity;

class AuditTrail extends Component
{
    use WithPagination;

    public $exportModal = false;

    public function export()
    {
        $date = now();
        return Excel::download(new AuditTrailExport, 'audit_trail-'.$date.'.pdf');

        activity('Export result')
            ->causedBy(auth()->user()->id)
            ->withProperties(['attributes' => [
                'name' => auth()->user()->name
                ]])
            ->log(auth()->user()->name.' is exporting result');
    }

    public function render()
    {
        return view('livewire.administrator.manage-reports.audit-trail', [
            'activities' => Activity::latest()->paginate(5),
        ]);
    }
}
