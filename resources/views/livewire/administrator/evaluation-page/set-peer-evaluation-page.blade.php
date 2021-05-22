<div>
    <div class="space-y-2">
            {{-------------------------------------------------- Success message for Import --------------------------------------------------}}
            <x-jet-action-message on="imported" class="w-full text-white bg-green-500 rounded-lg ">
                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                    <div class="flex items-center">
                        <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                        </svg>

                        <p class="mx-3 text-white">Imported successfully.</p>
                    </div>
                </div>
            </x-jet-action-message>
        {{-------------------------------------------------- Success message for Create --------------------------------------------------}}
        <x-jet-action-message on="created" class="w-full text-white bg-green-500 rounded-lg ">
            <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                <div class="flex items-center">
                    <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current text-white">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"></path>
                    </svg>

                    <p class="mx-3 text-white">Created successfully.</p>
                </div>
            </div>

        </x-jet-action-message>

        <x-jet-button wire:click="$toggle('openModal')">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Create
        </x-jet-button>

        {{-- <div class="flex justify-center font-medium">
            <div wire:loading>
                Loading
                <svg class="inline" width="32px" height="32px" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000"><circle cx="15" cy="15" r="15"><animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="60" cy="15" r="9" fill-opacity=".3"><animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from=".5" to=".5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="105" cy="15" r="15"><animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"></animate></circle></svg>
            </div>
        </div> --}}
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8  space-y-2">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Instructor</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">School year</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Semester</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">year & Section</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject Code</th>
                            <th scope="col" class="relative px-6 py-3"><span class="sr-only">View</span></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($spes as $spe)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10"><img class="h-8 w-8 rounded-full" src="{{ $spe->instructors->profile_photo_url }}" alt=""></div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $spe->instructors->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $spe->instructors->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $spe->schoolYears->school_year }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $spe->semesters->semester }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $spe->courses->course }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $spe->yearSections->year_and_section }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $spe->subjectCodes->subject_code }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button wire:click="$toggle('viewModal')" class="text-indigo-600 hover:text-indigo-900">View</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $spes->links() }}
        </div>
            </div>
        </div>


        {{-------------------------------------------------- Create Modal  --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="openModal">
            <x-slot name="title">
                <label class="block text-sm font-medium text-gray-700">
                    Create evaluator
                </label>
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="create">
                    <div class="space-y-2">
                        <div class="mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-2 md:gap-6">
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6 space-y-3">
                                            {{-- <x-jet-secondary-button wire:click="clear"> --}}
                                                {{-- <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg> --}}
                                                {{-- Clear inputs
                                            </x-jet-secondary-button> --}}

                                            <div class="grid grid-cols-6 gap-2">
                                                <div class="col-span-6 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700 pr-2">School year</label>
                                                <div class=" flex items-center">
                                                    <select wire:model="school_year" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="null">- Choose school year -</option>
                                                        @foreach ($schoolYears as $Sy)
                                                        <option value="{{ $Sy->id }}">{{ $Sy->school_year }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700">Semester</label>
                                                <select wire:model="semester" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="null">-- choose semester</option>
                                                    @foreach ($sems as $sem)
                                                    <option value="{{ $sem->id }}">{{ $sem->semester }}</option>
                                                    @endforeach
                                                </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                <label for="country" class="block text-sm font-medium text-gray-700">Instructor</label>
                                                <select wire:model="instructor" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="null">-- choose instructor --</option>
                                                    @foreach ($instructors as $instructor)
                                                    <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                                    @endforeach
                                                </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                                                <select wire:model="course" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="null">-- choose course --</option>
                                                    @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course }}</option>
                                                    @endforeach
                                                </select>
                                                </div>


                                                @if ($yearAndSection)
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="year_and_section" class="block text-sm font-medium text-gray-700">Year and Section</label>
                                                    <select wire:model="year_and_section" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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

                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 overscroll-y-contain h-72">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg ">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="flex px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        student id number
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        @if ($studentCount == 0)
                                                        <div>
                                                            <p class="capitalize text-red-500">(No student found...)</p>
                                                        </div>
                                                        @else
                                                        <div>
                                                            <span class=" text-blue-700 text-xs rounded-md p-1">{{ count($selectedStudents)}}/{{$studentCount }} ({{ number_format((count($selectedStudents) / $studentCount) * 100) }}%)</span>
                                                        </div>
                                                        @endif
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select100" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        100%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select80" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        80%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select60" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        60%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select40" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        40%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select20" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        20%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select10" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        10%
                                                    </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($students as $student)
                                                <tr>
                                                    <td colspan="8" class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    <input wire:model="selectedStudents" value="{{ $student->id }}" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                                    {{ $student->id_number }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- <div class="flex justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <div class="text-left">
                                                <x-jet-validation-errors class="mb-4" />
                                            </div>
                                            <div>
                                                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                                                    {{ __('Create') }}
                                                </x-jet-button>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </x-slot>
            <x-slot name="footer">
                <div class="text-left">
                    <x-jet-validation-errors class="mb-4" />
                </div>
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- View modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="viewModal">
            <x-slot name="title">
                <label class="block text-sm font-medium text-gray-700">
                    Evaluator
                </label>
            </x-slot>

            <x-slot name="content">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student Number</th>
                                            <th scope="col" class="relative px-6 py-3"><span class="sr-only">View</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        {{-- @foreach ($studentEvaluator->users as $user) --}}
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        {{-- <div class="text-sm text-gray-500">{{ count($user->id) }}</div> --}}
                                                        {{-- <div class="text-sm font-medium text-gray-900">{{ $user->id_number }}</div> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
                <x-slot name="footer">
                <div class="text-left">
                    <x-jet-validation-errors class="mb-4" />
                </div>
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-dialog-modal>

    </div>
</div>
