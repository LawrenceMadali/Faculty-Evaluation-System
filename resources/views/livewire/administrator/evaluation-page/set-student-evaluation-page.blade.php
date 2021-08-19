<div>
    <div class="space-y-2">
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

        <div class="flex justify-between">
            <div class="flex items-center space-x-4">
                <x-jet-button wire:click="openCreateModal">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    Create
                </x-jet-button>

                <button wire:click="openEditModal" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150"
                {{ $activeCount < 1 ? 'disabled' : null }} >
                    Disable
                </button>
            </div>
        </div>

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
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">year & Section</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course Code</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Count of Evaluatee</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Updated At</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($sses as $sse)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><div class="flex items-center">
                            <div class="text-sm font-medium text-gray-900">{{ $sse->instructors->name }}</div>
                        </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->schoolYears->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->semesters->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                            {{ $sse->is_active === 0
                            ? 'bg-red-100 text-red-800'
                            : 'bg-green-100 text-green-800'}}">
                            {{ $sse->is_active === 0 ? 'Disabled' : 'Enable' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->courses->course }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->yearSections->year_and_section }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->CourseCodes->course_code }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->evaluatee }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->created_at->ToFormattedDateString() }}</div>
                            <div class="text-sm text-gray-500">{{ $sse->created_at->diffForHumans() }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $sse->updated_at->ToFormattedDateString() }}</div>
                            <div class="text-sm text-gray-500">{{ $sse->updated_at->diffForHumans() }}</div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10">
                            <div class="flex justify-center items-center space-x-2">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-xl text-gray-400 font-medium py-8">No evaluation set yet...</span>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            {{ $sses->links() }}
        </div>
            </div>
        </div>


        {{-------------------------------------------------- Create Modal  --------------------------------------------------}}
        <x-jet-dialog-modal maxWidth="5xl" wire:model.defer="openModal">
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
                                            <div class="grid grid-cols-6 gap-2">

                                                <div class="col-span-6 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700 pr-2">School year</label>
                                                <div class=" flex items-center">
                                                    <select wire:model="school_year" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose school year --</option>
                                                        @foreach ($schoolYears as $Sy)
                                                        <option value="{{ $Sy->id }}">{{ $Sy->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                </div>

                                                @if (!empty($school_year) && $school_year != null)
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label class="block text-sm font-medium text-gray-700">Semester</label>
                                                        <select wire:model="semester" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">-- choose semester</option>
                                                            @foreach ($sems as $sem)
                                                            <option value="{{ $sem->id }}">{{ $sem->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                                @if (!empty($semester) && $semester != null)
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Instructor</label>
                                                    <select wire:model="instructor" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose instructor --</option>
                                                        @foreach ($instructors as $instructor)
                                                        <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                                <div class="hidden">
                                                    <input wire:model="name" type="text">
                                                    <input wire:model="id_number" type="text">
                                                    <input wire:model="college_id" type="text">
                                                </div>

                                                @if (!empty($courses) && !empty($instructor))
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label class="block text-sm font-medium text-gray-700">Course</label>
                                                        <select wire:model="course" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">-- choose course --</option>
                                                            @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}">{{ $course->course }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                                @if (!empty($yearAndSections) && !empty($course))
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                                                    <select wire:model="yearAndSection" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose year and section --</option>
                                                        @foreach ($yearAndSections as $yearAndSection)
                                                        <option value="{{ $yearAndSection->id }}">{{ $yearAndSection->year_and_section }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                                @if (!empty($courseCodes) && !empty($yearAndSection))
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label class="block text-sm font-medium text-gray-700">Course Code</label>
                                                        <select wire:model="courseCode" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">-- choose course code --</option>
                                                            @foreach ($courseCodes as $courseCode)
                                                            <option value="{{ $courseCode->id }}">{{ $courseCode->course_code }}</option>
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

                        <div class="flex items-center mr-2 text-sm w-full font-poppins p-2 border-2 border-blue-500 bg-blue-200 rounded-md text-blue-700">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Check the checkbox of percentage you want, or select manually. The percentage checkbox are chose randomly.</span>
                        </div>

                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg overflow-y-scroll h-60">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="flex px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        student number
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        @if (!$students)
                                                            <div>
                                                                <svg width="32px" height="32px" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" color="#000000"><g fill="none" fill-rule="evenodd" transform="translate(1 1)" stroke-width="2"><circle cx="22" cy="22" r="6"><animate attributeName="r" begin="1.5s" dur="3s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-opacity" begin="1.5s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-width" begin="1.5s" dur="3s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="22" cy="22" r="6"><animate attributeName="r" begin="3s" dur="3s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-opacity" begin="3s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-width" begin="3s" dur="3s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="22" cy="22" r="8"><animate attributeName="r" begin="0s" dur="1.5s" values="6;1;2;3;4;5;6" calcMode="linear" repeatCount="indefinite"></animate></circle></g></svg>
                                                            </div>
                                                        @else
                                                            @if ($studentCount == 0)
                                                                <div>
                                                                    <p class="capitalize text-red-500 text-center">No students found...</p>
                                                                </div>
                                                            @else
                                                                <div>
                                                                    <span class=" text-blue-700 text-xs rounded-md p-1">{{ count($selectedStudents)}}/{{$studentCount }} ({{ number_format((count($selectedStudents) / $studentCount) * 100) }}%)</span>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select100" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        100%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select90" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        90%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select80" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        80%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select70" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        70%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select60" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        60%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select50" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        50%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select40" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        40%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select30" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        30%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select20" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        20%
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        <input wire:model="select10" {{ $yearAndSections ? null : 'disabled' }} type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                                        10%
                                                    </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @if (!is_null($students))
                                                @foreach ($students as $student)
                                                <tr>
                                                    <td colspan="12" class="px-6 py-4 whitespace-nowrap">
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
                                                @endif
                                            </tbody>
                                        </table>
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

        {{-------------------------------------------------- Edit Selected Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="editModal">
            <x-slot name="title">
                <div>
                    {{ __('Edit Status') }}
                </div>
            </x-slot>

            <x-slot name="content">
                <div class="flex items-center justify-center p-2 bg-yellow-200 text-yellow-700 rounded-lg text-sm">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    Are you sure you want to disable? {{$activeCount}} will be affected.
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="updateSelected" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
