<?php

namespace App\Http\Livewire\Administrator\SummaryResults;

use Livewire\Component;
use App\Models\PeerRatingForm;

class PeerToPeerEvaluation extends Component
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
        $per = PeerRatingForm::find($id);
        $this->total = $per->total;
        $this->scale = $per->scale;
        $this->commitment_total = $per->commitment_total;
        $this->knowledge_of_subject_total = $per->knowledge_of_subject_total;
        $this->management_of_learning_total = $per->management_of_learning_total;
        $this->teaching_for_independent_learning_total = $per->teaching_for_independent_learning_total;

        $this->viewModal = true;
    }

    public function closeModal()
    {
        $this->viewModal = false;
    }

    public function render()
    {
        return view('livewire.administrator.summary-results.peer-to-peer-evaluation', [
            'instructors' => PeerRatingForm::with('spes', 'semesters', 'schoolYears')
                            ->latest()
                            ->get()
        ]);
    }
}
