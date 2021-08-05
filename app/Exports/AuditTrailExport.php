<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Spatie\Activitylog\Models\Activity;

class AuditTrailExport implements
    FromView,
    WithStyles,
    ShouldAutoSize,
    WithColumnWidths
{
    public function view(): View
    {
        return view('audit-trail-pdf', [
            'activities' => Activity::latest('id')->get(),
            'currentTime' => now(),
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $count = Activity::count();

        $sheet->getStyle('A1:F'. $count+2)->getAlignment()->setVertical('center');
        $sheet->getStyle('A1:F'. $count+2)->getAlignment()->setHorizontal('center');

        return [
            1 => [ 'font' => ['bold' => true,]],
            2 => [ 'font' => ['bold' => true,]],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5, 'B' => 15, 'C' => 15, 'D' => 10, 'E' => 10, 'F' => 12,
        ];
    }
}
