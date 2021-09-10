<div>
    <div class="space-y-2">
        {{-------------------------------------------------- Success message for Create --------------------------------------------------}}
        <x-jet-action-message on="added" class="w-full text-white bg-green-500 rounded-lg ">
            <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                <div class="flex items-center">
                    <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                    </svg>

                    <p class="mx-3 text-white">Added successfully.</p>
                </div>
            </div>
        </x-jet-action-message>
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

        <div class="flex justify-start items-center space-x-4">
            <x-jet-button wire:click.prevent="createOpenModal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Add Course Code
            </x-jet-button>

            <x-jet-input wire:model="search" type="text" placeholder="Search course code..."/>
        </div>

        <div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> ID </th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Course Code </th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Properties </th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Created at </th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Updated at </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($ccs as $cc)
                                <tr>
                                    <td class="px-2 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $cc->id }}</div></td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $cc->course_code }} </div>
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900"> <span class="text-sm text-gray-500">Year and Section: </span>{{ $cc->year_and_sections->year_and_section }} </div>
                                        <div class="text-sm font-medium text-gray-900"> <span class="text-sm text-gray-500">Semester: </span>{{ $cc->semesters->name }} </div>
                                        <div class="text-sm font-medium text-gray-900"> <span class="text-sm text-gray-500">Instructor: </span>{{ $cc->instructors->name }} </div>
                                        <div class="text-sm font-medium text-gray-900"> <span class="text-sm text-gray-500">Course: </span>{{ $cc->courses->course }}</div>
                                    </td>

                                    <td class="px-2 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $cc->created_at->ToFormattedDateString() }}</div>
                                        <div class="text-sm text-gray-500">{{ $cc->created_at->diffForHumans() }}</div>
                                    </td>

                                    <td class="px-2 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $cc->updated_at->ToFormattedDateString() }}</div>
                                        <div class="text-sm text-gray-500">{{ $cc->updated_at->diffForHumans() }}</div>
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                    <button wire:click="editOpenModal({{$cc->id}})" class="text-indigo-600 hover:text-indigo-900 hover:underline"><em>Edit</em></button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="flex justify-center items-center space-x-2">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                            <span class="text-xl text-gray-400 font-medium py-8">No result...</span>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{ $ccs->links() }}
                    </div>
                </div>
                </div>
            </div>
        </div>
        {{-------------------------------------------------- Create Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="createModal">
            <x-slot name="title">
                {{ __('Add Course Code') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="create">
                    <div class="space-y-4">

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Course Code</label>
                            <input wire:model.lazy="course_code" type="text" placeholder="e.g. (course code) - (desciption)" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <x-jet-input-error for="course_code"/>
                        </div>

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Semester</label>
                            <select wire:model="semester_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- select --</option>
                                @foreach ($semesters as $sem)
                                <option value="{{ $sem->id }}">{{ $sem->name }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="semester_id"/>
                        </div>

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Properties</label>
                            <select wire:model="year_and_section_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- select --</option>
                                @foreach ($year_and_sections as $yas)
                                <option value="{{ $yas->id }}">{{ $yas->year_and_section }}  || <span> {{ $yas->instructors->name }} || {{ $yas->courses->course }} </span> </option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="year_and_section_id"/>
                        </div>
                        <div>
                            <input wire:model="instructor_id" type="text" hidden>
                            <input wire:model="course_id" type="text" hidden>
                        </div>

                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Add') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- Edit Modal --------------------------------------------------}}
        <x-jet-dialog-modal maxWidth="4xl" wire:model.defer="editModal">
            <x-slot name="title">
                {{ __('Edit Course Code') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="create">
                    <div class="space-y-4">

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Course Code</label>
                            <input wire:model.lazy="course_code" type="text" placeholder="e.g. (course code) - (desciption)" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <x-jet-input-error for="course_code"/>
                        </div>

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Semester</label>
                            <select wire:model="semester_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- select --</option>
                                @foreach ($semesters as $sem)
                                <option value="{{ $sem->id }}">{{ $sem->name }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="semester_id"/>
                        </div>

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                            <select wire:model="year_and_section_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- select --</option>
                                @foreach ($year_and_sections as $yas)
                                <option value="{{ $yas->id }}">{{ $yas->year_and_section }}  | <span> ({{ $yas->instructors->name }}) ({{ $yas->courses->course }}) </span> </option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="year_and_section_id"/>
                        </div>
                        <div>
                            <input wire:model="instructor_id" type="text" hidden>
                            <input wire:model="course_id" type="text" hidden>
                        </div>

                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Done') }}
                </x-jet-button>

                <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
