<?php

namespace App\Http\Livewire\Administrator\SummaryResults;

use Livewire\Component;
use App\Models\StudentRatingForm;

class StudentEvaluation extends Component
{
    public function render()
    {
        return view('livewire.administrator.summary-results.student-evaluation',[
            'students' => StudentRatingForm::all()
        ]);
    }
}
