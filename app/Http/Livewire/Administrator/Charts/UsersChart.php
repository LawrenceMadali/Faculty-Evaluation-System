<?php

namespace App\Http\Livewire\Administrator\Charts;

use App\Charts\UsersChart as ChartsUsers;
use Livewire\Component;

class UsersChart extends Component
{
    public function render(ChartsUsers $chart)
    {
        return view('livewire.administrator.charts.users-chart',[
            'chart' => $chart->build()
        ]);
    }
}
