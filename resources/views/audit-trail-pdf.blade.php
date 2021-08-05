<table>
    <thead>
        <tr>
            <th colspan="6">Date Exported: {{ $currentTime }}</th>
        </tr>
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
    </tbody>
</table>
                