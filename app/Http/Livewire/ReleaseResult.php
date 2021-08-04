<?php

namespace App\Http\Livewire;

use App\Models\Results;
use Auth;
use Livewire\Component;

class ReleaseResult extends Component
{
    public function render()
    {
        return view('livewire.release-result', [
            'results' => Results::where([
                'is_release' => 1,
                'id_number' => Auth::user()->id_number
                ])->get(),
        ]);
    }
}
