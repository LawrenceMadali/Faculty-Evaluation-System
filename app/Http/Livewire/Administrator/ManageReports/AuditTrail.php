<?php

namespace App\Http\Livewire\Administrator\ManageReports;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Activitylog\Models\Activity;

class AuditTrail extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.administrator.manage-reports.audit-trail', [
            'activities' => Activity::latest('id')->paginate(10),
        ]);
    }
}
