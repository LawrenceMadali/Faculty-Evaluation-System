<div>
    <div class="mt-10">
        <table class="min-w-full">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> id number </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> commitment </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> knowledge of subject </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> teaching for independent learning </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> management of learning </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> total </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> submitted at </th>
            </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($instructors as $instructor)
                <tr>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->id_number }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->commitment_total }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->knowledge_of_subject_total }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->teaching_for_independent_learning_total }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->management_of_learning_total }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->total }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->created_at->toFormattedDateString() }}</td>
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
            </tbody>
        </table>
    </div>
</div>
