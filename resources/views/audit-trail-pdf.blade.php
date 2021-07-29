<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Audit Trail Export</title>
</head>
<body>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
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
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($activities as $activity)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 text-center">
                                            {{ $activity->causer_id == null ? '-' : $activity->causer_id  }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $activity->log_name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $activity->description }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm capitalize">
                                        @foreach($activity->changes['attributes'] ?? [] as $key => $value)
                                            {{ $key }}: {{ $value }} <br/>
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm capitalize">
                                        @foreach($activity->changes['old'] ?? [] as $key => $value)
                                            {{ $key }}: {{ $value }} <br/>
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $activity->created_at }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    {{-- {{ $activities->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <table>
        <thead>
        <tr>
            <th>Log name</th>
            <th>Description</th>
            <th>Attributes</th>
            <th>Old</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($auditTrails as $audit)
            <tr>
                <td>{{ $audit->log_name }}</td>
                @foreach ($audit->changes['attribute'] ?? [] as $key => $value)
                <td>
                    {{ $key }}: {{ $value }}
                </td>
                @endforeach
                @foreach ($audit->changes['old'] ?? [] as $key => $value)
                <td>
                    {{ $key }}: {{ $value }}
                </td>
                @endforeach
                <td>
                    {{ $audit->created_at->ToFormattedDateString() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> --}}
</body>
</html>
