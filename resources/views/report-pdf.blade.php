<table>
    <thead>
        <tr>
            <th colspan="10">Date Exported: {{ $currentDate }}</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Id Number</th>
            <th>College</th>
            <th>Semester</th>
            <th>School Year</th>
            <th>Peer Evaluation Result</th>
            <th>Student Evaluation Result</th>
            <th>Supervisor</th>
            <th>IPCR</th>
            <th>Total</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    @foreach($reports as $report)
        <tr>
            <td>{{ $report->instructors->name }}</td>
            <td>{{ $report->id_number }}</td>
            <td>{{ $report->colleges->name }}</td>
            <td>{{ $report->semesters->name }}</td>
            <td>{{ $report->school_years->name }}</td>
            <td>{{ $report->peer_evaluation_result }}</td>
            <td>{{ $report->student_evaluation_result }}</td>
            <td>{{ $report->supervisor }}</td>
            <td>{{ $report->ipcr }}</td>
            <td>{{ $report->total }}</td>
            <td>{{ $report->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>