<div>
    <div>
        {{-------------------------------------------------- Success message for Import --------------------------------------------------}}
        <x-jet-action-message on="import" class="w-full text-white bg-green-500 rounded-lg ">
            <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                <div class="flex items-center">
                    <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                    </svg>

                    <p class="mx-3 text-white">Imported successfully.</p>
                </div>
            </div>
        </x-jet-action-message>

        <div class="mb-2 sm:flex sm:justify-between sm:items-center">
            <x-jet-secondary-button wire:click="$toggle('importModal')">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                import
            </x-jet-secondary-button>

            <div wire:loading>
            <svg class="inline-block" width="20px" height="20px" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" color="#000000"><g transform="translate(1 1)" stroke-width="2" fill="none" fill-rule="evenodd"><circle stroke-opacity=".5" cx="18" cy="18" r="18"></circle><path d="M36 18c0-9.94-8.06-18-18-18"><animateTransform attributeName="transform" type="rotate" from="0 18 18" to="360 18 18" dur="1s" repeatCount="indefinite"></animateTransform></path></g></svg>
            Loading...
            </div>
        </div>

        {{-- <form wire:submit.prevent="create"> --}}
            <section>
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-2">
                                        <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700 pr-2">School year</label>
                                        <div class=" flex items-center">
                                            <select wire:model="school_year" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">- Choose school year -</option>
                                                @foreach ($schoolYears as $Sy)
                                                <option value="{{ $Sy->id }}">{{ $Sy->school_year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <x-jet-input-error for="school_year"/>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700">Semester</label>
                                        <select wire:model="semester" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose semester</option>
                                            @foreach ($sems as $sem)
                                            <option value="{{ $sem->id }}">{{ $sem->semester }}</option>
                                            @endforeach
                                        </select>
                                            <x-jet-input-error for="semester"/>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Instructor</label>
                                        <select wire:model="instructor" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose instructor --</option>
                                            @foreach ($instructors as $instructor)
                                            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                            @endforeach
                                        </select>
                                            <x-jet-input-error for="instructor"/>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                        <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                                        <select wire:model="course" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose course --</option>
                                            @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course }}</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="course"/>
                                        </div>


                                        @if ($yearAndSection)
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="subject_code" class="block text-sm font-medium text-gray-700">Year and Section</label>
                                            <select wire:model="year_and_section" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>-- choose year and section --</option>
                                                @foreach ($yearAndSection as $yrSec)
                                                <option value="{{ $yrSec->id }}">{{ $yrSec->year_and_section }}</option>
                                                @endforeach
                                            </select>
                                            <x-jet-input-error for="year_and_section"/>
                                        </div>
                                        @endif

                                        @if ($subjectCodes)
                                        <div class="col-span-6 sm:col-span-3">
                                        <label for="subject_code" class="block text-sm font-medium text-gray-700">Subject Code</label>
                                        <select wire:model="subject_code" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose subject code --</option>
                                            @foreach ($subjectCodes as $sc)
                                            <option value="{{ $sc->id }}">{{ $sc->subject_code }}</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="subject_code"/>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <form wire:submit.prevent="create">
                <section>
                    <div class="flex flex-col mt-5">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th>
                                                    <x-jet-input wire:model="name" class="block mt-1 w-full" type="text" />
                                                </th>
                                            </tr>
                                        <tr>
                                            <th scope="col" class="flex items-center px-6 py-3 space-x-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                <input wire:model="selectAll" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                Student
                                                @if ($studentCount == 0)
                                                <div>
                                                    <p class="capitalize text-red-500">(No student found...)</p>
                                                    </div>
                                                    @else
                                                    <div>
                                                        <span class=" text-green-700 text-xs bg-green-300 rounded-md p-1">{{ count($selectedStudents)}}/{{$studentCount }}</span>
                                                        <span class="text-green-700 text-xs bg-green-300 rounded-md p-1"> {{ number_format((count($selectedStudents) / $studentCount) * 100) }}% </span>
                                                    </div>
                                                    @endif
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($students as $student)
                                            <tr>
                                                <td colspan="5" class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <input wire:model="selectedStudents" value="{{ $student->id }}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $student->name }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <x-jet-input-error for="selectedStudents"/>
                                        </tbody>
                                    </table>
                                    <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                                        <div class="flex justify-end items-center">
                                            <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                                                {{ __('Cancel') }}
                                            </x-jet-secondary-button>

                                            <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                                                {{ __('Create') }}
                                            </x-jet-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        {{-- </form> --}}
        {{-------------------------------------------------- Import Modal  --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="importModal">
            <x-slot name="title">
                <label class="block text-sm font-medium text-gray-700">
                    Import user
                </label>
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="importSection">
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="flex flex-col justify-center items-center space-y-1">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <div class="flex text-sm text-gray-600">
                        <label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input wire:model="file" id="file" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-sm text-yellow-700 bg-yellow-100 p-2 rounded-lg">
                            <span class="text-red-400">*</span>Note: Please check the excel file headings with matching fields in the table below.</p>
                        {{-- <x-jet-input-error for="studentFile"/> --}}
                        <x-jet-validation-errors class="mb-4" />
                        <div wire:loading class="text-sm text-green-700 px-2 bg-green-200 rounded-md">
                            Please wait
                            <svg class="text-green-700 inline" width="32px" height="32px" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000"><circle cx="15" cy="15" r="15"><animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="60" cy="15" r="9" fill-opacity=".3"><animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from=".5" to=".5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="105" cy="15" r="15"><animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"></animate></circle></svg>
                        </div>
                    </div>
                    </div>
                </form>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="importSection" wire:loading.attr="disabled">
                    {{ __('Import') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
