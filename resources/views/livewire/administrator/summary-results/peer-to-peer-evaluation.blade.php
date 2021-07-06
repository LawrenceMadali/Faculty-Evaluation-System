<div>
    <div class="mt-10">
        <table class="min-w-full">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> evaluated instructor </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> semester </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> school year </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> status </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> submitted at </th>
                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
            </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($instructors as $instructor)
                <tr>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->spes->name }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->semesters->name }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->schoolYears->name }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                        {{ $instructor->is_evaluated === 0
                        ? 'bg-red-100 text-red-800'
                        : 'bg-green-100 text-green-800'}}">
                        {{ $instructor->is_evaluated === 0 ? 'Inactive' : 'Active' }}
                        </span>
                    </td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $instructor->created_at->toFormattedDateString() }}</td>
                    <td class="px-6 py-4 whitespace-nowrap flex my-2 text-right text-sm font-medium space-x-4">
                        <button wire:click.prevent="" class="text-indigo-600 hover:text-indigo-900 hover:underline"><em>View</em></button>
                        <button wire:click.prevent="" class="text-indigo-600 hover:text-indigo-900 hover:underline"><em>Edit</em></button>
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
            </tbody>
        </table>
    </div>


        {{-------------------------------------------------- Update Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="warningModal">
            <x-slot name="title">
                {{ __('Disabled') }}
            </x-slot>

            <x-slot name="content">
                
            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
</div>
