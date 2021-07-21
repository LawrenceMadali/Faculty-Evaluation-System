<div>
    <div class="space-y-2 mt-2">
        <div class="mt-10 sm:mt-0">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="submit">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-4">
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">Instructor</label>
                                    <select wire:model="instructor" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="">-- choose instructor --</option>
                                            @foreach ($instructors as $instructor)
                                            <option value="{{ $instructor->id }}"> {{ $instructor->name }} </option>
                                            @endforeach
                                    </select>
                                    <x-jet-input-error for="name"/>
                                </div>

                                <div class="col-span-6">
                                    <div class="px-2 rounded-md bg-blue-200 font-medium text-blue-700 text-center">
                                        Preview
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                    <input wire:model.lazy="name" disabled type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">Id number</label>
                                    <input wire:model.lazy="id_number" disabled type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">College</label>
                                    <select wire:model="college_id" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="">-- --</option>
                                            @foreach ($colleges as $college)
                                            <option value="{{ $college->id }}"> {{ $college->name }} </option>
                                            @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="flex justify-end items-center px-4 py-3 bg-gray-50 sm:px-6">
                            <x-jet-action-message class="mr-3 px-2 py-1 rounded-lg bg-green-100 text-green-700" on="added">
                                {{ __('Added.') }}
                            </x-jet-action-message>
                            <x-jet-button>
                                {{ __('Add') }}
                            </x-jet-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <section class="flex justify-center items-center">
            {{-------------------------------------------------- Success message for Update --------------------------------------------------}}
            <x-jet-action-message on="updated" class="w-full text-white bg-green-500 rounded-lg ">
                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                    <div class="flex items-center">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                        </svg>

                        <p class="mx-3 text-white">Updated successfully.</p>
                    </div>
                </div>
            </x-jet-action-message>
        </section>

        <x-jet-section-border/>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id number</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">college</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">{{ $user->id_number }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">{{ $user->colleges->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $user->is_regular === 0 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800'}}">
                                        {{ $user->is_regular === 0 ? 'Part time' : 'Regular' }}</span>
                                    </td>
                                    <td class="flex items-center py-6 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                        <button wire:click.prevent="openEditModal({{ $user->id }})" class="text-indigo-600 hover:text-indigo-900 hover:underline"><em>Edit</em></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
        {{-- ------------------------------------------------ Edit Modal ------------------------------------------------ --}}
        <x-jet-dialog-modal wire:model.defer="editModal">
            <x-slot name="title">
                {{ __('Edit') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="update">
                    <div class="col-span-6">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input wire:model="is_regular" value="1" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                <input wire:model="is_regular" value="0" type="hidden" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label class="font-medium text-gray-700">Status</label>
                                <p class="text-gray-500">Manage status of selcted instructor.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
