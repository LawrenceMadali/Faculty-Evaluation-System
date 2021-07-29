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
        return Excel::download(new AuditTrailExport, 'audit-trail.pdf');
    }

    public function render()
    {
        return view('livewire.administrator.manage-reports.audit-trail', [
            'activities' => Activity::latest('id')->paginate(5),
        ]);
    }
}
