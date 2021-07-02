<div>
    <div class="space-y-4">
        {{-------------------------------------------------- Success message for Created school year --------------------------------------------------}}
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
        {{-------------------------------------------------- Success message for Updated school year --------------------------------------------------}}
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

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
                <div class="flex items-center space-x-4">
                    <x-jet-button wire:click="$toggle('openModal')">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                        new
                    </x-jet-button>
                </div>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> status </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Semester </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> School year </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Created By </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Created at </th>
                        <th scope="col" class="relative px-6 py-3"> <span class="sr-only">Edit</span> </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($questionairs as $q )
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($q->is_enabled == 1)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    enabled
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    disabled
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap"><div class="flex items-center">{{ $q->semester }}</div></td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $q->school_year }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $q->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $q->created_at->toFormattedDateString() }}</div>
                                <div class="text-sm text-gray-500">{{ $q->created_at->diffForHumans() }}</div>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                                <button wire:click="openViewModal({{ $q->id }})" class="text-indigo-600 hover:text-indigo-900">View</button>

                                @if (!$count >= 1 || $q->is_enabled == 1)
                                <button wire:click="editOpenModal({{ $q->id }})" class="text-indigo-600 hover:text-indigo-900 hover:underline">Edit</button>
                                @else
                                <button wire:click="$toggle('warningModal')" class="text-indigo-600 hover:text-indigo-900 hover:underline">Edit</button>
                                @endif

                            </td>
                            @empty
                            <tr>
                                <td colspan="6">
                                    <div class="flex justify-center items-center space-x-2">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        <span class="text-xl text-gray-400 font-medium py-8">No questionairs found...</span>
                                    </div>
                                </td>
                            </tr>
                        </tr>
                        @endforelse
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        {{-------------------------------------------------- Create Questionair Open Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="openModal">
            <x-slot name="title">
                Create new questionair
            </x-slot>
            <x-slot name="content">
                <div class="mt-10 sm:mt-0">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $pages[$currentPage]['heading'] }}</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $pages[$currentPage]['subHeading'] }}
                        </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form wire:submit.prevent="create">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-2">
                                @if ($currentPage === 1)
                                <div class="col-span-6">
                                    <x-jet-validation-errors class="mb-4" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700 pr-2">School year</label>
                                    <div class=" flex items-center">
                                        <select wire:model="school_year" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="null">-- choose school year --</option>
                                            @foreach ($schoolYears as $Sy)
                                            <option value="{{ $Sy->name }}">{{ $Sy->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700 pr-2">Semester</label>
                                    <select wire:model="semester" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="null">-- choose semester --</option>
                                        @foreach ($sems as $sem)
                                        <option value="{{ $sem->name }}">{{ $sem->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @elseif ($currentPage === 2)
                                    <div class="col-span-6">
                                    <x-jet-label for="A_Question_1" value="{{ __('Question number 1') }}" />
                                    <x-jet-input wire:model.lazy="A_Question_1" id="A_Question_1"  name="A_Question_1" type="text"  class="block mt-1 w-full" :value="old('A_Question_1')" />
                                    <x-jet-input-error for="A_Question_1"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="A_Question_2" value="{{ __('Question number 2') }}" />
                                    <x-jet-input wire:model.lazy="A_Question_2" id="A_Question_2"  name="A_Question_2" type="text"  class="block mt-1 w-full" :value="old('A_Question_2')" />
                                    <x-jet-input-error for="A_Question_2"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="A_Question_3" value="{{ __('Question number 3') }}" />
                                    <x-jet-input wire:model.lazy="A_Question_3" id="A_Question_3"  name="A_Question_3" type="text"  class="block mt-1 w-full" :value="old('A_Question_3')" />
                                    <x-jet-input-error for="A_Question_3"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="A_Question_4" value="{{ __('Question number 4') }}" />
                                    <x-jet-input wire:model.lazy="A_Question_4" id="A_Question_4"  name="A_Question_4" type="text"  class="block mt-1 w-full" :value="old('A_Question_4')" />
                                    <x-jet-input-error for="A_Question_4"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="A_Question_5" value="{{ __('Question number 5') }}" />
                                    <x-jet-input wire:model.lazy="A_Question_5" id="A_Question_5"  name="A_Question_5" type="text"  class="block mt-1 w-full" :value="old('A_Question_5')" />
                                    <x-jet-input-error for="A_Question_5"/>
                                    </div>

                                @elseif ($currentPage === 3)
                                {{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
                                    <div class="col-span-6">
                                    <x-jet-label for="B_Question_1" value="{{ __('Question number 1') }}" />
                                    <x-jet-input wire:model.lazy="B_Question_1" id="B_Question_1"  name="B_Question_1" type="text"  class="block mt-1 w-full" :value="old('B_Question_1')" />
                                    <x-jet-input-error for="B_Question_1"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="B_Question_2" value="{{ __('Question number 2') }}" />
                                    <x-jet-input wire:model.lazy="B_Question_2" id="B_Question_2"  name="B_Question_2" type="text"  class="block mt-1 w-full" :value="old('B_Question_2')" />
                                    <x-jet-input-error for="B_Question_2"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="B_Question_3" value="{{ __('Question number 3') }}" />
                                    <x-jet-input wire:model.lazy="B_Question_3" id="B_Question_3"  name="B_Question_3" type="text"  class="block mt-1 w-full" :value="old('B_Question_3')" />
                                    <x-jet-input-error for="B_Question_3"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="B_Question_4" value="{{ __('Question number 4') }}" />
                                    <x-jet-input wire:model.lazy="B_Question_4" id="B_Question_4"  name="B_Question_4" type="text"  class="block mt-1 w-full" :value="old('B_Question_4')" />
                                    <x-jet-input-error for="B_Question_4"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="B_Question_5" value="{{ __('Question number 5') }}" />
                                    <x-jet-input wire:model.lazy="B_Question_5" id="B_Question_5"  name="B_Question_5" type="text"  class="block mt-1 w-full" :value="old('B_Question_5')" />
                                    <x-jet-input-error for="B_Question_5"/>
                                    </div>

                                @elseif ($currentPage === 4)
                                {{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
                                    <div class="col-span-6">
                                    <x-jet-label for="C_Question_1" value="{{ __('Question number 1') }}" />
                                    <x-jet-input wire:model.lazy="C_Question_1" id="C_Question_1"  name="C_Question_1" type="text"  class="block mt-1 w-full" :value="old('C_Question_1')" />
                                    <x-jet-input-error for="C_Question_1"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="C_Question_2" value="{{ __('Question number 2') }}" />
                                    <x-jet-input wire:model.lazy="C_Question_2" id="C_Question_2"  name="C_Question_2" type="text"  class="block mt-1 w-full" :value="old('C_Question_2')" />
                                    <x-jet-input-error for="C_Question_2"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="C_Question_3" value="{{ __('Question number 3') }}" />
                                    <x-jet-input wire:model.lazy="C_Question_3" id="C_Question_3"  name="C_Question_3" type="text"  class="block mt-1 w-full" :value="old('C_Question_3')" />
                                    <x-jet-input-error for="C_Question_3"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="C_Question_4" value="{{ __('Question number 4') }}" />
                                    <x-jet-input wire:model.lazy="C_Question_4" id="C_Question_4"  name="C_Question_4" type="text"  class="block mt-1 w-full" :value="old('C_Question_4')" />
                                    <x-jet-input-error for="C_Question_4"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="C_Question_5" value="{{ __('Question number 5') }}" />
                                    <x-jet-input wire:model.lazy="C_Question_5" id="C_Question_5"  name="C_Question_5" type="text"  class="block mt-1 w-full" :value="old('C_Question_5')" />
                                    <x-jet-input-error for="C_Question_5"/>
                                    </div>

                                @elseif ($currentPage === 5)
                                {{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
                                    <div class="col-span-6">
                                    <x-jet-label for="D_Question_1" value="{{ __('Question number 1') }}" />
                                    <x-jet-input wire:model.lazy="D_Question_1" id="D_Question_1"  name="D_Question_1" type="text"  class="block mt-1 w-full" :value="old('D_Question_1')" />
                                    <x-jet-input-error for="D_Question_1"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="D_Question_2" value="{{ __('Question number 2') }}" />
                                    <x-jet-input wire:model.lazy="D_Question_2" id="D_Question_2"  name="D_Question_2" type="text"  class="block mt-1 w-full" :value="old('D_Question_2')" />
                                    <x-jet-input-error for="D_Question_2"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="D_Question_3" value="{{ __('Question number 3') }}" />
                                    <x-jet-input wire:model.lazy="D_Question_3" id="D_Question_3"  name="D_Question_3" type="text"  class="block mt-1 w-full" :value="old('D_Question_3')" />
                                    <x-jet-input-error for="D_Question_3"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="D_Question_4" value="{{ __('Question number 4') }}" />
                                    <x-jet-input wire:model.lazy="D_Question_4" id="D_Question_4"  name="D_Question_4" type="text"  class="block mt-1 w-full" :value="old('D_Question_4')" />
                                    <x-jet-input-error for="D_Question_4"/>
                                    </div>

                                    <div class="col-span-6">
                                    <x-jet-label for="D_Question_5" value="{{ __('Question number 5') }}" />
                                    <x-jet-input wire:model.lazy="D_Question_5" id="D_Question_5"  name="D_Question_5" type="text"  class="block mt-1 w-full" :value="old('D_Question_5')" />
                                    <x-jet-input-error for="D_Question_5"/>
                                    </div>
                                @endif
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <div class="flex justify-between items-center px-4 py-3 bg-gray-50 text-right sm:px-6">
                    @if ($currentPage === 1)
                    <x-jet-secondary-button wire:click="closeModal">
                        Cancel
                    </x-jet-secondary-button>
                    @else
                        <x-jet-secondary-button wire:click="goToPreviousPage">
                            Back
                        </x-jet-secondary-button>
                    @endif
                    @if ($currentPage === count($pages))
                        <x-jet-button wire:click="create">
                            Submit
                        </x-jet-button>
                    @else
                        <x-jet-button wire:click="goToNextPage">
                            Next
                        </x-jet-button>
                    @endif
                </div>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- Edit Status Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="editModal">
            <x-slot name="title">
                {{ __('Edit Course') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="update">
                    <div class="col-span-6">
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <input wire:model="is_enabled" name="is_enabled" type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        <input type="hidden" name="is_enabled" value="0">
                        <x-jet-input-error for="is_enabled"/>
                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('editModal')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- Warning Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="warningModal">
            <x-slot name="title">
                {{ __('Oops!') }}
            </x-slot>

            <x-slot name="content">
                <div class="p-2 bg-red-100 text-red-700 rounded-md text-sm text-center">
                    <span>Only one question must be enabled... Please disable first the enabled one.</span>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- View Modal --------------------------------------------------}}
        <x-jet-dialog-modal maxWidth="4xl" wire:model.defer="viewModal">
            <x-slot name="title">
                {{ __('Questions') }}
            </x-slot>

            <x-slot name="content">
                <section class="p-4 space-y-4">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-4">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">A. Commitment</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap space-y-2">
                                            <div class="text-sm text-gray-700">
                                                1. {{ $A_Question_1 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                2. {{ $A_Question_2 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                3.	{{ $A_Question_3 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                4.	{{ $A_Question_4 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                5.	{{ $A_Question_5 }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>

                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">B. Knowledge of Subject</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap space-y-2">
                                            <div class="text-sm text-gray-700">
                                                1. {{ $B_Question_1 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                2. {{ $B_Question_2 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                3.	{{ $B_Question_3 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                4.	{{ $B_Question_4 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                5.	{{ $B_Question_5 }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>

                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">C. Teaching for Independent Learning</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap space-y-2">
                                            <div class="text-sm text-gray-700">
                                                1. {{ $C_Question_1 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                2. {{ $C_Question_2 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                3.	{{ $C_Question_3 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                4.	{{ $C_Question_4 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                5.	{{ $C_Question_5 }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>

                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">D. Management of Learning</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap space-y-2">
                                            <div class="text-sm text-gray-700">
                                                1. {{ $D_Question_1 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                2. {{ $D_Question_2 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                3.	{{ $D_Question_3 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                4.	{{ $D_Question_4 }}
                                            </div>
                                            <div class="text-sm text-gray-700">
                                                5.	{{ $D_Question_5 }}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
