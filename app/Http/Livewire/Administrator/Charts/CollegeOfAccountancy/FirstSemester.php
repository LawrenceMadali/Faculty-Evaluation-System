<?php

namespace App\Http\Livewire\Administrator\Charts\CollegeOfAccountancy;

use App\Charts\CollegeOfAccountancy\FirstSemesterChart;
use Livewire\Component;

class FirstSemester extends Component
{
    public function render(FirstSemesterChart $chart)
    {
        return view('livewire.administrator.charts.college-of-accountancy.first-semester',
        [
            'chart' => $chart->build()
        ]);
    }
}
