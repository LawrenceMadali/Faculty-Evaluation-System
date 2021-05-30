<div>
    <x-jet-button wire:click.prevent="createOpenModal">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        Create New User
    </x-jet-button>

    <x-jet-dialog-modal wire:model.defer="createModal">
        <x-slot name="title">
            {{ __('Create New User') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="create" x-data="{role_id: 1}">
                <div class="space-y-4">
                    <div class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Role</label>
                        <select x-model="role_id" wire:model="role_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="null">-- choose role --</option>
                            <option value="2">Dean</option>
                            <option value="3">Secretary</option>
                            <option value="4">Instructor</option>
                            <option value="5">Student</option>
                            <option value="6">HR</option>
                        </select>
                        <x-jet-input-error for="role_id"/>
                    </div>

                    <div class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <input wire:model.lazy="name" placeholder="e.g. Lastname, Firstname Mi." type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <x-jet-input-error for="name"/>
                    </div>
                    <div class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Id number</label>
                        <input wire:model.lazy="id_number" placeholder="e.g. 0123456789" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <x-jet-input-error for="id_number"/>
                    </div>
                    <div class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input wire:model.lazy="email" placeholder="e.g. JohnDoe@example.com" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <x-jet-input-error for="email"/>
                    </div>

                    <div x-show="role_id == 2 || role_id == 4 || role_id == 5" class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">College</label>
                        <select wire:model="selectedCollege" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="null">-- choose college --</option>
                            @foreach ($colleges as $college)
                            <option value="{{ $college->id }}">{{ $college->name }}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="selectedCollege"/>
                    </div>

                    @if (!is_null($courses) )
                        <div x-show="role_id == 5" class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Course</label>
                            <select wire:model="course_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="null">-- choose course --</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="course_id"/>
                        </div>
                    @endif
                    <div x-show="role_id == 5" class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                        <select wire:model="year_and_section_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="null">-- choose year and section --</option>
                            {{-- @foreach ($yearAndSections as $yearAndSection)
                            <option value="{{ $yearAndSection->id }}">{{ $yearAndSection->name }}</option>
                            @endforeach --}}
                        </select>
                        <x-jet-input-error for="year_and_section_id"/>
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
