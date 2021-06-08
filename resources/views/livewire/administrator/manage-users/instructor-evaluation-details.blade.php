<div>
    <div class="space-y-2 mt-2">
        <section class="flex justify-center items-center">
            {{-------------------------------------------------- Success message for Create --------------------------------------------------}}
            <x-jet-action-message on="created" class="w-full text-white bg-green-500 rounded-lg ">
                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                    <div class="flex items-center">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                        </svg>

                        <p class="mx-3 text-white">Added successfully.</p>
                    </div>
                </div>
            </x-jet-action-message>
        </section>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Add evaluation details for instructors</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Choose instructor you want to evaluate.
                </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="submit">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Instructors</label>
                            <select wire:model="user_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>-- choose instructor --</option>
                                @foreach ($instructors as $instructor)
                                <option value="{{ $instructor->id }}"> {{ $instructor->name }} </option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="user_id"/>
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
        </div>

        <x-jet-section-border/>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Id</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
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
                                                <div class="text-sm font-medium text-gray-900">{{ $user->users->id }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">{{ $user->users->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $user->users->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $user->is_regular === 0 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800'}}">
                                        {{ $user->is_regular === 0 ? 'Part time' : 'Regular' }}</span>
                                    </td>
                                    <td class="flex items-center py-6 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                        <button wire:click="OpenViewModal" class="text-indigo-600 hover:text-indigo-900 hover:underline">View</button>
                                        <button wire:click="OpenManageModal({{$user->id}})" class="text-indigo-600 hover:text-indigo-900 hover:underline">Manage</button>
                                        {{-- @livewire('administrator.manage-users.manage-instructor.edit') --}}
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
        {{-------------------------------------------------- Manage Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="manageModal">
            <x-slot name="title">
                {{ __('Manage details') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="create">
                    <x-jet-validation-errors class="mb-4" />
                    <div class="space-y-4">
                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Instructor</label>
                            <select wire:model="detailsID" disabled class="mt-1 block w-full py-2 px-3 border border-gray-200 bg-white text-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Course Code</label>
                            <select wire:model="course_code" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- choose course code --</option>
                                @foreach ($ccts as $courseCode)
                                <option value="{{ $courseCode->id }}">{{ $courseCode->course_code_title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                            <input wire:model.lazy="year_and_section" placeholder="e.g. 3-1" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            {{-- <x-jet-input-error for="year_and_section"/> --}}
                        </div>
                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
