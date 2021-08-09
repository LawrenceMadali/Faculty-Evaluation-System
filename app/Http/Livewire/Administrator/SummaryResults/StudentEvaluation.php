<?php

namespace App\Http\Livewire\Administrator\SummaryResults;

use Livewire\Component;
use App\Models\StudentRatingForm;

class StudentEvaluation extends Component
{
    public $viewModal = false;
    public $total;
    public $scale;
    public $commitment_total;
    public $knowledge_of_subject_total;
    public $teaching_for_independent_learning_total;
    public $management_of_learning_total;

    public function openViewModal($id)
    {
        $ser = StudentRatingForm::find($id);
        $this->total = $ser->total;
        $this->scale = $ser->scale;
        $this->commitment_total = $ser->commitment_total;
        $this->knowledge_of_subject_total = $ser->knowledge_of_subject_total;
        $this->management_of_learning_total = $ser->management_of_learning_total;
        $this->teaching_for_independent_learning_total = $ser->teaching_for_independent_learning_total;

        $this->viewModal = true;
    }

    public function closeModal()
    {
        $this->viewModal = false;
    }

    public function render()
    {
        return view('livewire.administrator.summary-results.student-evaluation',[
            'students' => StudentRatingForm::with('sses', 'semesters', 'school_years')
                        ->latest('id')
                        ->get(),
        ]);
    }
}
