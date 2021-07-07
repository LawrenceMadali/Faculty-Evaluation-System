<?php

namespace App\Http\Livewire\Administrator\ManageReports;

use App\Models\Instructor;
use App\Models\PeerRatingForm;
use App\Models\StudentRatingForm;
use Livewire\Component;

class Report extends Component
{
    // public $totalPrfScale;
    // public $totalSrfScale;

    // public function mount()
    // {
    //     $this->totalPrfScale = PeerRatingForm::where('instructor_id', 1)->avg('scale');
    //     $this->totalSrfScale = StudentRatingForm::where('instructor_id', 1)->avg('scale');
    // }

    public $resultId;
    public function getResult($id)
    {
        $this->resultId = $id;
        $result = PeerRatingForm::find($this->resultId);
        $totalPrfScale = $result->totalPrfScale;
        $totalSrfScale = $result->totalSrfScale;
        dd($this->resultId);
    }

    public function render()
    {
        $totalPrfScale = PeerRatingForm::where([
            'spe_id'        => 1,
            'semester_id'   => 1,
            'school_year_id'=> 1,
            ])->avg('scale');
        $totalSrfScale = StudentRatingForm::where('sse_id', 1)->avg('scale');

        return view('livewire.administrator.manage-reports.report',
        compact('totalPrfScale', 'totalSrfScale'),
        [
            'prfs' => Instructor::all(),
        ]);
    }
}
