<div>
    <div class="mt-10">
        <x-table>
            <x-slot name="head">
                <x-table.head> Evaluated instructor </x-table.head>
                <x-table.head> Commitment </x-table.head>
                <x-table.head> Knowledge of subject </x-table.head>
                <x-table.head> Teaching for independent learning </x-table.head>
                <x-table.head> Management of learning </x-table.head>
                <x-table.head> Total </x-table.head>
                <x-table.head> scale </x-table.head>
                <x-table.head> Submitted at </x-table.head>
            </x-slot>
            <x-slot name="body">
                @forelse ($students as $student)
                    <tr>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->instructors->name }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->commitment_total }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->knowledge_of_subject_total }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->teaching_for_independent_learning_total }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->management_of_learning_total }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->total }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->scale }}
                        </td>
                        <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $student->created_at->toFormattedDateString() }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">
                            <div class="flex justify-center items-center space-x-2">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                <span class="text-xl text-gray-400 font-medium py-8">No results yet...</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </x-slot>
        </x-table>
    </div>
</div>
