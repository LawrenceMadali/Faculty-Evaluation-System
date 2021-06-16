<?php

namespace App\Http\Livewire\Administrator\ManageReports;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;

class AuditTrail extends Component
{

    public function render()
    {
        return view('livewire.administrator.manage-reports.audit-trail', [
            'activities' => Activity::all(),
        ]);
    }
}
