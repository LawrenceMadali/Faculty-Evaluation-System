<div>
    <div class="space-y-2 mt-2">
        <div class="flex justify-end">
            <x-jet-button wire:click.prevent="export">
                Export
            </x-jet-button>
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
                                            <div class="text-sm text-gray-900">{{ $activity->created_at->ToFormattedDateString() }}</div>
                                            <div class="text-sm text-gray-500">{{ $activity->created_at->diffForHumans() }}</div>
                                        </td>
                                    </tr>
                                @endforeach
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
