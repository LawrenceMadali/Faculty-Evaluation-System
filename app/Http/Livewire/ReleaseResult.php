<?php

namespace App\Http\Livewire;

use App\Models\Instructor;
use App\Models\PeerRatingForm;
use App\Models\Results;
use App\Models\StudentRatingForm;
use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ReleaseResult extends Component
{
    use WithPagination;

    public $feedbackModal = false;

    public function openFeedbackModal()
    {
        $this->feedbackModal = true;
    }

    public function render()
    {
        return view('livewire.release-result', [
            'results' => Results::where([
                'is_release' => 1,
                'id_number' => Auth::user()->id_number
                ])->paginate(10),
            
            'prfs' => PeerRatingForm::where('id_number' ,Auth::user()->id_number)
            ->with('colleges')->latest()->get(),
            
            'srfs' => StudentRatingForm::where('id_number' ,Auth::user()->id_number)
            ->with('colleges')->latest()->get(),
        ]);
    }
}
