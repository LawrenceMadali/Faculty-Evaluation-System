<?php

namespace App\Http\Livewire\Administrator\Charts\CollegeOfBusiness;

use App\Charts\CollegeOfBusiness\SecondSemesterChart;
use Livewire\Component;

class SecondSemester extends Component
{
    public function render(SecondSemesterChart $chart)
    {
        return view('livewire.administrator.charts.college-of-business.second-semester',
        [
            'chart' => $chart->build()
        ]);
    }
}
