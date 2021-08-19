<div>
    <div class="space-y-2 mt-2">
        <div class="flex items-center space-x-2">
            <x-jet-button wire:click.prevent="export" wire:loading.attr="disabled">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Export
                </div>
            </x-jet-button>
            <div class="flex items-center mr-2 text-sm font-poppins p-2 border-2 border-blue-500 bg-blue-200 rounded-md text-blue-700">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Cleaning up the logs monthly</span>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Id</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Log name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">attributes</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">old</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date and time</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($activities as $activity)
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
                                            <div class="text-sm text-gray-900">{{ $activity->created_at->ToFormattedDateString() }}</div>
                                            <div class="text-sm text-gray-500">{{ $activity->created_at->diffForHumans() }}</div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">
                                            <div class="flex justify-center items-center space-x-2">
                                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                                <span class="text-xl text-gray-400 font-medium py-8">No audit found...</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{ $activities->links() }}
                    </div>
                </div>
            </div>
        </div>
        {{-------------------------------------------------- Export modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="exportModal">
            <x-slot name="title">
                {{ __('Export') }}
            </x-slot>

            <x-slot name="content">

            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>
                <x-jet-button class="ml-2" wire:click="" wire:loading.attr="disabled">
                    {{ __('Export') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
