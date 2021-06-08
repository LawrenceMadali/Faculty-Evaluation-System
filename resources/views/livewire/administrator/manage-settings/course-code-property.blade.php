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
        {{-- <x-jet-action-message on="updated" class="w-full text-white bg-green-500 rounded-lg ">
            <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                <div class="flex items-center">
                    <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                    </svg>

                    <p class="mx-3 text-white">Updated successfully.</p>
                </div>
            </div>
        </x-jet-action-message> --}}
        <div class="flex justify-start items-center">
            <x-jet-button wire:click.prevent="createOpenModal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Add Course Code
            </x-jet-button>
        </div>

        <div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> ID </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Course Code </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Instructor </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Created at </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Updated at </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($ccs as $cc)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $cc->id }}</div></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $cc->course_code }}</div></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $cc->instructors->name }}</div></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $cc->created_at->ToFormattedDateString() }}</div></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $cc->updated_at->ToFormattedDateString() }}</div></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                    <button wire:click="editOpenModal({{$cc->id}})" class="text-indigo-600 hover:text-indigo-900 hover:underline">add year and section</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="flex justify-center items-center space-x-2">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                            <span class="text-xl text-gray-400 font-medium py-8">No results yet...</span>
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
                            <label class="block text-sm font-medium text-gray-700">Instructor</label>
                            <select wire:model="instructor_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">-- choose instructor --</option>
                                @foreach ($instructors as $instructor)
                                <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="instructor_id"/>
                        </div>
                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Course Code</label>
                            <input wire:model.lazy="course_code" type="text" placeholder="e.g. (course code) - (desciption)" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <x-jet-input-error for="course_code"/>
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
                <form wire:submit.prevent="update">
                    <div class="space-y-4">


                        <div class="mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit and Update</h3>
                                        <p class="mt-1 text-sm text-gray-600">Make your data updated.</p>
                                    </div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form wire:submit.prevent="update">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6">
                                                        <label class="block text-sm font-medium text-gray-700">Course Code</label>
                                                        <input wire:model.lazy="course_code" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        <x-jet-input-error for="course_code"/>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label class="block text-sm font-medium text-gray-700">Instructor</label>
                                                        <select wire:model="instructor_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            @foreach ($instructors as $instructor)
                                                            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <x-jet-input-error for="instructor_id"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end items-center px-4 py-3 bg-gray-50 sm:px-6">
                                                <x-jet-action-message class="mr-3 px-2 py-1 rounded-lg bg-green-100 text-green-700" on="updated">
                                                    {{ __('Updated.') }}
                                                </x-jet-action-message>
                                                <x-jet-button wire:click.prevent="update" wire:loading.attr="disabled">
                                                    {{ __('Update') }}
                                                </x-jet-button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <x-jet-section-border/>
                        <div class="mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <div class="px-4 sm:px-0">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Year and section</h3>
                                        <p class="mt-1 text-sm text-gray-600">Assign year and section for specific instructor.</p>
                                    </div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form wire:submit.prevent="submitYearAndSection">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">

                                                    <div class="col-span-6">
                                                        <label class="block text-sm font-medium text-gray-700">Course code</label>
                                                        <select wire:model="course_code_id"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">-- please match course code from above --</option>
                                                            @foreach ($courseCodes as $cc)
                                                            <option value="{{ $cc->id }}">{{ $cc->course_code }}</option>
                                                            @endforeach
                                                        </select>
                                                        <x-jet-input-error for="course_code_id"/>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label class="block text-sm font-medium text-gray-700">Instructor</label>
                                                        <select wire:model="instructor_id" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            @foreach ($instructors as $instructor)
                                                            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <x-jet-input-error for="instructor_id"/>
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-4">
                                                        <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                                                        <input wire:model.lazy="year_and_section" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        <x-jet-input-error for="year_and_section"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-end items-center px-4 py-3 bg-gray-50 sm:px-6">
                                                <x-jet-action-message class="mr-3 px-2 py-1 rounded-lg bg-green-100 text-green-700" on="saved">
                                                    {{ __('Saved.') }}
                                                </x-jet-action-message>
                                                <x-jet-button wire:click.prevent="submitYearAndSection" wire:loading.attr="disabled">
                                                    {{ __('Save') }}
                                                </x-jet-button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <x-jet-section-border/>

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year and Section</th>
                                    <th scope="col" class="relative px-6">
                                        <x-jet-action-message class="mr-3 text-xs font-normal text-red-500" on="deleted">
                                            {{ __('Deleted successfully.') }}
                                        </x-jet-action-message>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @if (!is_null($yearAndSections))
                                    @foreach ($yearAndSections as $yearAndSection)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $yearAndSection->year_and_section }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button wire:click.prevent="remove({{$yearAndSection->id}})" class="text-red-600 hover:text-red-900">Remove</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Done') }}
                </x-jet-button>

                {{-- <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button> --}}
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
