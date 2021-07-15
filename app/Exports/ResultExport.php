<?php

namespace App\Exports;

use App\Models\Results;
use App\Models\ReportGroupList;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ResultExport implements FromCollection,
ShouldAutoSize, WithHeadings, WithMapping,
WithColumnFormatting, WithStyles, WithEvents,
WithColumnWidths
{
    public $semester;
    // public $count;
    public $school_year;

    public function __construct($resultId)
    {
        $this->resultId = $resultId;
        $reportList = ReportGroupList::find($resultId);
        $this->semester = $reportList->semester_id;
        $this->school_year = $reportList->school_year_id;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
            },
        ];
    }

    public function map($row): array
    {
        return [
            $row->id_number,
            $row->instructors->name,
            $row->semesters->name,
            $row->school_years->name,
            $row->peer_evaluation_result,
            $row->student_evaluation_result,
            $row->supervisor,
            $row->ipcr,
            $row->total,
            Date::dateTimeToExcel($row->created_at),
        ];
    }

    public function columnFormats(): array
    {
        return [
            'J' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 12, 'B' => 20, 'C' => 12, 'D' => 12, 'E' => 7,
            'F' => 7, 'G' => 10, 'H' => 7,  'I' => 7,  'J' => 12
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $count = Results::where(['semester_id' => $this->semester,
        'school_year_id' => $this->school_year])
        ->with('semesters', 'school_years')->count();

        $sheet->getStyle('A1:J'. $count+1)->getAlignment()->setVertical('center');
        $sheet->getStyle('A1:J'. $count+1)->getAlignment()->setHorizontal('center');

        return [
            1 => [ 'font' => ['bold' => true, 'bg-color' => ['rgb' => 'ccc']]],
        ];
    }

    public function headings(): array
    {
        return [
            // 'Id',
            'Id Number',
            'Instructor',
            'Semester',
            'School Year',
            'PRF Result',
            'SRF Result',
            'Supervisor',
            'Ipcr',
            'Total',
            'Date',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Results::where(['semester_id' => $this->semester,
            'school_year_id' => $this->school_year])
            ->with('semesters', 'school_years')
            ->latest('total')
            ->get();
    }
}
