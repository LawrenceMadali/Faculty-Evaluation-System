<div>
    <div class="space-y-2 mt-2">

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">

                <div class="flex justify-between items-center">
                    <div class="flex justify-start items-center space-x-2">
                        <x-jet-button wire:click="openCreateModal">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            Add student
                        </x-jet-button>
                        <x-jet-secondary-button wire:click="$toggle('importModal')">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            import
                        </x-jet-secondary-button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative inline-flex">
                            <select wire:model="sortField" class="text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="created_at">Created at</option>
                                <option value="id_number">Id number</option>
                                <option value="name">Name</option>
                                <option value="role_id">Role</option>
                            </select>
                        </div>
                        <div class="relative inline-flex">
                            <select wire:model="sortAsc" class="text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="1">Ascending</option>
                                <option value="0">Descending</option>
                            </select>
                        </div>
                        <div class="relative inline-flex">
                            <select wire:model="perPage" class="text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User id</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course code</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year & Section</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($students as $student)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $student->user_id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">{{ $student->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $student->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $student->id_number }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> {{ $student->course_codes->course_code }} </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> {{ $student->yearAndSections->year_and_section }} </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                    {{ $student->is_enrolled == 0 ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800'}}">
                                    {{ $student->is_enrolled == 0 ? 'Pending' : 'Enrolled' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">
                                    <div class="flex justify-center items-center space-x-2">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <span class="text-xl text-gray-400 font-medium py-8">No students found...</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-------------------------------------------------- Create Modal --------------------------------------------------}}
    <x-jet-dialog-modal maxWidth="5xl" wire:model.defer="createModal">
        <x-slot name="title">
            {{ __('Manage account') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Add evaluation details for students</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Choose student you want to become evaluatee.
                        </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form wire:submit.prevent="submit">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">Students</label>
                                            <select wire:model="student" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">-- choose students --</option>
                                                @foreach ($studentUsers as $student)
                                                <option value="{{ $student->id }}"> {{ $student->name }} </option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="student"/>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">Course Code</label>
                                            <select wire:model="course_code" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>-- choose course --</option>
                                                @foreach ($course_codes as $courseCode)
                                                <option value="{{ $courseCode->id }}"> {{ $courseCode->course_code }} </option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="course_code"/>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                                            <select wire:model="year_and_section" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>-- choose year and section --</option>
                                                @foreach ($year_and_sections as $yr_and_sec)
                                                <option value="{{ $yr_and_sec->id }}"> {{ $yr_and_sec->year_and_section }} </option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="year_and_section"/>
                                        </div>
                                        <div class="col-span-6">
                                            <x-jet-section-border/>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">Id number</label>
                                            <input wire:model.lazy="id_number" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <x-jet-input-error for="id_number"/>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">Name</label>
                                            <input wire:model.lazy="name" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <x-jet-input-error for="name"/>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label class="block text-sm font-medium text-gray-700">Email</label>
                                            <input wire:model.lazy="email" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <x-jet-input-error for="email"/>
                                        </div>

                                    </div>
                                </div>
                                <div class="flex justify-end items-center px-4 py-3 bg-gray-50 sm:px-6">
                                    <x-jet-action-message class="mr-3 px-2 py-1 rounded-lg bg-green-100 text-green-700" on="added">
                                        {{ __('Added.') }}
                                    </x-jet-action-message>
                                    <x-jet-button wire:click.prevent="submit">
                                        {{ __('Add') }}
                                    </x-jet-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                {{ __('Done') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
