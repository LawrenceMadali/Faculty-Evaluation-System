<div>
    <div class="mt-10">
        <table class="min-w-full">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> evaluated student </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> semester </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> school year </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 text-center uppercase tracking-wider"> submitted at </th>
                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
            </tr>
            </thead>
            <tbody class="bg-white">
                @forelse ($students as $student)
                <tr>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $student->sses->name }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $student->semesters->name }}</td>
                    <td class="px-6 text-center py-4 whitespace-nowrap text-sm text-gray-900">{{ $student->school_years->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $student->created_at->toFormattedDateString() }}</div>
                        <div class="text-sm text-gray-500">{{ $student->created_at->diffForHumans() }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex my-2 text-right text-sm font-medium space-x-4">
                        <button wire:click="openViewModal({{ $student->id }})" class="text-indigo-600 hover:text-indigo-900 hover:underline"><em>View</em></button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">
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


        {{-------------------------------------------------- View Modal --------------------------------------------------}}
        <x-jet-dialog-modal maxWidth="3xl" wire:model.defer="viewModal">
            <x-slot name="title">
                {{ __('Student Evaluation Results') }}
            </x-slot>

            <x-slot name="content">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Commitment</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Knowledge of Subject</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Teaching for independent learning</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Management of learning</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Scale</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 text-center">{{ $commitment_total }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 text-center">{{ $knowledge_of_subject_total }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 text-center">{{ $teaching_for_independent_learning_total }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 text-center">{{ $management_of_learning_total }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 text-center">{{ $total }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900 text-center">{{ $scale }}</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
</div>
