<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Spatie\Activitylog\Models\Activity;

class AuditTrailExport implements FromView, WithStyles, ShouldAutoSize, WithColumnWidths
{
    public function view(): View
    {
        return view('audit-trail-pdf', [
            'activities' => Activity::latest()->get(),
            'currentTime' => now()->format('F d, Y h:ia'),
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A:F')->getAlignment()->setVertical('center');
        $sheet->getStyle('A:F')->getAlignment()->setHorizontal('center');

        return [
            1 => [ 'font' => ['bold' => true,]]
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5, 'B' => 15, 'C' => 15, 'D' => 10, 'E' => 10, 'F' => 12,
        ];
    }
}
