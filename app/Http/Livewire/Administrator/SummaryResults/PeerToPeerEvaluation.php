<?php

namespace App\Http\Livewire\Administrator\SummaryResults;

use Livewire\Component;
use App\Models\PeerRatingForm;

class PeerToPeerEvaluation extends Component
{
    public function render()
    {
        return view('livewire.administrator.summary-results.peer-to-peer-evaluation', [
            'instructors' => PeerRatingForm::with('instructors')->get()
        ]);
    }
}
