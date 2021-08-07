<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class UsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $admin = User::where(['role_id' => 1, 'created_at' => '2021-08-06'])->count();
        $dean = User::where(['role_id' => 2, 'created_at' => '2021-08-06'])->count();

        return $this->chart->barChart()
            ->setTitle('Users')
            // ->setSubtitle('')
            ->addData('Administrator', [$admin])
            ->addData('Dean', [$dean])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);
    }
}
