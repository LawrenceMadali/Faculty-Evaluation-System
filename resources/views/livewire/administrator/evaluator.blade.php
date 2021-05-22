<div>
    <div class="space-y-2">
        <div>
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
        </div>
        {{-------------------------------------------------- Success message for Import --------------------------------------------------}}

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

        <form wire:submit.prevent="create">
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
                                            <select wire:model="sy_1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">- Choose school year -</option>
                                                @foreach ($schoolYears as $Sy)
                                                <option value="{{ $Sy->id }}">{{ $Sy->school_year }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                        <label class="block text-sm font-medium text-gray-700">Semester</label>
                                        <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose semester</option>
                                            @foreach ($sems as $sem)
                                            <option value="{{ $sem->id }}">{{ $sem->semester }}</option>
                                            @endforeach
                                        </select>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Instructor</label>
                                        <select wire:model="instructor" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose instructor --</option>
                                            @foreach ($instructors as $instructor)
                                            <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                            @endforeach
                                        </select>
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                        <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                                        <select wire:model="course" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>-- choose course --</option>
                                            @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course }}</option>
                                            @endforeach
                                        </select>
                                        </div>


                                        @if ($yearAndSection)
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="subject_code" class="block text-sm font-medium text-gray-700">Year and Section</label>
                                            <select wire:model="yearAndSection" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option>-- choose year and section --</option>
                                                @foreach ($yearAndSection as $yrSec)
                                                <option value="{{ $yrSec->id }}">{{ $yrSec->year_and_section }}</option>
                                                @endforeach
                                            </select>
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
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="flex flex-col mt-5">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="flex items-center px-6 py-3 space-x-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                        <th scope="col" class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <input wire:model="select100" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">100%</th>
                                        <th scope="col" class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <input wire:model="select50" value="" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">50%</th>
                                        <th scope="col" class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <input wire:model="select25" value="" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">25%</th>
                                        <th scope="col" class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <input wire:model="select10" value="" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">10%</th>
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
                                                            {{ $student->id_number }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="px-4 py-3 bg-gray-100 text-right sm:px-6">
                                    <div class="flex justify-end items-center">
                                        <x-jet-action-message class="mr-3 p-2 rounded bg-green-200 text-green-600" on="saved">
                                            {{ __('Saved.') }}
                                        </x-jet-action-message>

                                        <x-jet-button>
                                            {{ __('Save') }}
                                        </x-jet-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
</div>
