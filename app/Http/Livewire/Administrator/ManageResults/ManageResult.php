<?php

namespace App\Http\Livewire\Administrator\ManageResults;

use App\Models\Spe;
use Livewire\Component;

class ManageResult extends Component
{
    public function render()
    {
        // dd(Spe::where(''));
        return view('livewire.administrator.manage-results.manage-result');
    }
}
