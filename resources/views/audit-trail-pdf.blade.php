<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Log Name</th>
            <th>Description</th>
            <th>Attributes</th>
            <th>Old</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activities as $activity)
            <tr>
                <td>
                    <div>
                        {{ $activity->causer_id == null ? '-' : $activity->causer_id  }}
                    </div>
                </td>
                <td>
                    <div>{{ $activity->log_name }}</div>
                </td>
                <td>
                    <div>{{ $activity->description }}</div>
                </td>
                <td>
                    @foreach($activity->changes['attributes'] ?? [] as $key => $value)
                        {{ $key }}: {{ $value }} <br/>
                    @endforeach
                </td>
                <td>
                    @foreach($activity->changes['old'] ?? [] as $key => $value)
                        {{ $key }}: {{ $value }} <br/>
                    @endforeach
                </td>
                <td>
                    <div>{{ $activity->created_at }}</div>
                </td>
            </tr>
        @endforeach
            <tr>
                <td colspan="3">Date Exported: {{ $currentTime }}</td>
                <td colspan="3">Exported By: {{ auth()->user()->name }} </td>
            </tr>
    </tbody>
</table>
