<div>
    <div class="space-y-2">
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
        </section>


        {{-------------------------------------------------- Table --------------------------------------------------}}
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">

                    {{-------------------------------------------------- Buttons --------------------------------------------------}}
                    <div class="flex justify-between items-center">
                        <div class="flex justify-start items-center space-x-2">

                            <x-jet-button wire:click.prevent="createOpenModal">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                New
                            </x-jet-button>

                            <x-jet-input wire:model="search" type="text" placeholder="Search..."/>

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
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> id number </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> name </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> college </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> status </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Role </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> created at </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> updated at </th>
                                <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                                @forelse ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $user->id_number }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10"> <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="{{ Auth::user()->name }}"> </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900"> {{ $user->name }} </div>
                                                <div class="text-sm text-gray-500"> {{ $user->email }} </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm"> {{ $user->college_id === null ? '-' : $user->colleges->name }} </td>

                                    @if (in_array($user->role_id, [1, 2, 6]))
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $user->status === 0
                                        ? 'bg-red-100 text-red-800'
                                        : 'bg-green-100 text-green-800'}}">
                                        {{ $user->status === 0 ? '-' : 'Regular' }}
                                        </span>
                                    </td>
                                    @elseif ($user->role_id === 3)
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $user->status === 0
                                        ? 'bg-red-100 text-red-800'
                                        : 'bg-green-100 text-green-800'}}">
                                        {{ $user->status === 0 ? '-' : 'Staff' }}
                                        </span>
                                    </td>
                                    @elseif ($user->role_id === 4)
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $user->status === 0
                                        ? 'bg-blue-100 text-blue-800'
                                        : 'bg-green-100 text-green-800'}}">
                                        {{ $user->status === 0 ? 'Part time' : 'Regular' }}
                                        </span>
                                    </td>
                                    @elseif ($user->role_id === 5)
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        {{ $user->status === 0
                                        ? 'bg-red-100 text-red-800'
                                        : 'bg-green-100 text-green-800'}}">
                                        {{ $user->status === 0 ? 'Pending' : 'Enrolled' }}
                                        </span>
                                    </td>
                                    @endif
                                    <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> {{ $user->roles->name }} </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm text-gray-900">{{ $user->created_at->ToFormattedDateString() }}</div> </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm text-gray-900">{{ $user->updated_at->ToFormattedDateString() }}</div> </td>
                                    <td class="px-6 py-4 whitespace-nowrap flex text-right text-sm font-medium space-x-2">
                                        @if (in_array(auth()->user()->role_id, [2, 3]))
                                            @if ($user->role_id === 1)
                                            @else
                                            <button wire:click.prevent="editOpenModal({{$user->id}})" class="text-indigo-600 hover:text-indigo-900">Manage account</button>
                                            @endif
                                        @else
                                        <button wire:click.prevent="editOpenModal({{$user->id}})" class="text-indigo-600 hover:text-indigo-900 hover:underline">Manage account</button>
                                        @endif
                                        {{-- @if (!in_array($user->role_id, [1,2,3,6]))
                                        <button wire:click.prevent="$toggle('viewModal')" class="text-green-600 hover:text-green-900 hover:underline">View</button>
                                        @endif --}}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">
                                        <div class="flex justify-center items-center space-x-2">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <span class="text-xl text-gray-400 font-medium py-8">No users found...</span>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div>
                            {{ $users->links() }}
                        </div>
                        <div wire:loading class="font-medium text-gray-600">
                            Please wait
                            <svg class="inline" width="32px" height="32px" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000"><circle cx="15" cy="15" r="15"><animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="60" cy="15" r="9" fill-opacity=".3"><animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from=".5" to=".5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="105" cy="15" r="15"><animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"></animate></circle></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <x-jet-section-border/>
        @livewire('administrator.manage-users.manage-instructor.evaluation-details') --}}

        {{-------------------------------------------------- Create Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="createModal">
            <x-slot name="title">
                {{ __('Create New User') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="create">
                    <div class="space-y-4">
                        <div class="mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-2 md:gap-6">
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6 space-y-3">
                                            <div class="grid grid-cols-6 gap-2">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                                    <select wire:model="role_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose role --</option>
                                                        <option value="2">Dean</option>
                                                        <option value="3">Secretary</option>
                                                        <option value="4">Instructor</option>
                                                        <option value="5">Student</option>
                                                        <option value="6">HR</option>
                                                    </select>
                                                    <x-jet-input-error for="role_id"/>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input wire:model.lazy="name" placeholder="e.g. Lastname, Firstname Mi." type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="name"/>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Id number</label>
                                                    <input wire:model.lazy="id_number" placeholder="e.g. 0123456789" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="id_number"/>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input wire:model.lazy="email" placeholder="e.g. JohnDoe@example.com" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="email"/>
                                                </div>
                                                @if (in_array($role_id,[2,4,5]))
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">College</label>
                                                    <select wire:model="college_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose college --</option>
                                                        @foreach ($colleges as $college)
                                                        <option value="{{ $college->id }}">{{ $college->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <x-jet-input-error for="college_id"/>
                                                </div>
                                                @endif
                                                <div class="col-span-6 mt-2">
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        {{-------------------------------------------------- Edit Modal --------------------------------------------------}}
        <x-jet-dialog-modal maxWidth="4xl" wire:model.defer="editModal">
            <x-slot name="title">
                {{ __('Manage account') }}
            </x-slot>

            <x-slot name="content">
                    {{-- <div class="space-y-4">
                        <div class="mt-10 sm:mt-0">
                            <div class="md:grid md:grid-cols-2 md:gap-6">
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6 space-y-3">
                                            <div class="grid grid-cols-6 gap-2">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                                    <select wire:model="role_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose role --</option>
                                                        <option value="2">Dean</option>
                                                        <option value="3">Secretary</option>
                                                        <option value="4">Instructor</option>
                                                        <option value="5">Student</option>
                                                        <option value="6">HR</option>
                                                    </select>
                                                    <x-jet-input-error for="role_id"/>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input wire:model.lazy="name" placeholder="e.g. Lastname, Firstname Mi." type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="name"/>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Id number</label>
                                                    <input wire:model.lazy="id_number" placeholder="e.g. 0123456789" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="id_number"/>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input wire:model.lazy="email" placeholder="e.g. JohnDoe@example.com" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="email"/>
                                                </div>
                                                @if (in_array($role_id,[2,4,5]))
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">College</label>
                                                    <select wire:model="college_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose college --</option>
                                                        @foreach ($colleges as $college)
                                                        <option value="{{ $college->id }}">{{ $college->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <x-jet-input-error for="college_id"/>
                                                </div>
                                                @endif
                                                @if (in_array($role_id, [4, 5]) )
                                                <div class="flex flex-col space-y-3">
                                                    <span class="text-gray-700 text-sm font-medium"> Status </span>
                                                    <div class="flex items-center space-x-4">
                                                        <div class="flex items-center">
                                                            <input wire:model="status" id="regular" value="1" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                            <label for="regular" class="ml-3 block text-sm font-medium text-gray-700">
                                                                {{ $role_id == 4 ? 'Regular' : 'Enrolled' }}
                                                            </label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input wire:model="status" id="part_time" value="0" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                            <label for="part_time" class="ml-3 flex items-center text-sm font-medium text-gray-700">
                                                                {{ $role_id == 4 ? 'PartTime' : 'Pending' }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="col-span-6 mt-2">
                                                    <hr>
                                                </div>

                                                Manage account


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit and update</h3>
                                    <p class="mt-1 text-sm text-gray-600">Edit and update an account.</p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form wire:submit.prevent="update">
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                                    <select wire:model="role_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose role --</option>
                                                        <option value="2">Dean</option>
                                                        <option value="3">Secretary</option>
                                                        <option value="4">Instructor</option>
                                                        <option value="5">Student</option>
                                                        <option value="6">HR</option>
                                                    </select>
                                                    <x-jet-input-error for="role_id"/>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input wire:model.lazy="name" placeholder="e.g. Lastname, Firstname Mi." type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="name"/>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Id number</label>
                                                    <input wire:model.lazy="id_number" placeholder="e.g. 0123456789" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="id_number"/>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input wire:model.lazy="email" placeholder="e.g. JohnDoe@example.com" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="email"/>
                                                </div>
                                                @if (in_array($role_id,[2,4,5]))
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label class="block text-sm font-medium text-gray-700">College</label>
                                                    <select wire:model="college_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose college --</option>
                                                        @foreach ($colleges as $college)
                                                        <option value="{{ $college->id }}">{{ $college->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <x-jet-input-error for="college_id"/>
                                                </div>
                                                @endif
                                                @if (in_array($role_id, [4, 5]) )
                                                <div class="flex flex-col space-y-3">
                                                    <span class="text-gray-700 text-sm font-medium"> Status </span>
                                                    <div class="flex items-center space-x-4">
                                                        <div class="flex items-center">
                                                            <input wire:model="status" id="regular" value="1" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                            <label for="regular" class="ml-3 block text-sm font-medium text-gray-700">
                                                                {{ $role_id == 4 ? 'Regular' : 'Enrolled' }}
                                                            </label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input wire:model="status" id="part_time" value="0" name="status" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                            <label for="part_time" class="ml-3 flex items-center text-sm font-medium text-gray-700">
                                                                {{ $role_id == 4 ? 'PartTime' : 'Pending' }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center px-4 py-3 bg-gray-50 sm:px-6">
                                            <x-jet-action-message class="mr-3 px-2 py-1 rounded-lg bg-green-100 text-green-700" on="updated">
                                                {{ __('Updated.') }}
                                            </x-jet-action-message>
                                            <x-jet-button>
                                                {{ __('Update') }}
                                            </x-jet-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if (in_array($role_id, [4, 5]))
                    <div class="hidden sm:block" aria-hidden="true"><div class="py-5"><div class="border-t border-gray-200"></div></div></div>

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Evaluation details</h3>
                                    <p class="mt-1 text-sm text-gray-600">Details that using for evaluation.</p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form wire:submit.prevent="createEvaluationDetails">
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                
                                                <div class="col-span-6 sm:col-span-3 sr-only">
                                                    <label class="block text-sm font-medium text-gray-700">User</label>
                                                    <select wire:model="accId" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">-- choose instructor --</option>
                                                        @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <x-jet-input-error for="accId"/>
                                                </div>

                                                <div class="col-span-6">
                                                    <label class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input wire:model.lazy="name" disabled placeholder="e.g. Lastname, Firstname Mi." type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="name"/>
                                                </div>
                                                <div class="col-span-6">
                                                    <label class="block text-sm font-medium text-gray-700">Id number</label>
                                                    <input wire:model.lazy="id_number" disabled placeholder="e.g. 0123456789" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <x-jet-input-error for="id_number"/>
                                                </div>
                                                @if ($role_id === 4)     
                                                    <div class="col-span-6">
                                                        <label class="block text-sm font-medium text-gray-700">Course Code</label>
                                                        <select wire:model="course_code_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">-- choose course code --</option>
                                                            @foreach ($courseCodes as $courseCode)
                                                            <option value="{{ $courseCode->id }}">{{ $courseCode->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <x-jet-input-error for="course_code_id"/>
                                                    </div>
                                                @elseif ($role_id === 5)
                                                    <div class="col-span-6">
                                                        <label class="block text-sm font-medium text-gray-700">Year and Section</label>
                                                        <select wire:model="year_and_section_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">-- choose year and section --</option>
                                                            @foreach ($yearAndSections as $yearAndSection)
                                                            <option value="{{ $yearAndSection->id }}">{{ $yearAndSection->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <x-jet-input-error for="year_and_section_id"/>
                                                        <x-jet-action-message class="mr-3 text-xs text-red-700" on="validated">
                                                            {{ __('The course code is already taken.') }}
                                                        </x-jet-action-message> 
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex justify-end items-center px-4 py-3 bg-gray-50 sm:px-6">
                                            <x-jet-action-message class="mr-3 px-2 py-1 rounded-lg bg-green-100 text-green-700" on="courseCodeCreated">
                                                {{ __('Saved.') }}
                                            </x-jet-action-message>
                                            <x-jet-button>
                                                {{ __('Save') }}
                                            </x-jet-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="flex flex-col col-span-3">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $role_id === 4 ? 'Course Code' : 'Year and Section'}}</th>
                                                        <th scope="col" class="relative px-6">
                                                            <x-jet-action-message class="mr-3 text-xs font-normal text-red-500" on="removed">
                                                                {{ __('Deleted successfully.') }}
                                                            </x-jet-action-message>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @if ($role_id === 4)
                                                        @forelse ($instructors as $instructor)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex justify-between items-center">
                                                                    <div class="text-sm font-medium text-gray-900">{{ $instructor->CourseCodes->name }}</div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                {{-- <button  class="text-indigo-600 hover:text-indigo-900">Edit</button> --}}
                                                                <button wire:click.prevent="remove({{$instructor->id}})" class="text-red-600 hover:text-red-900">Delete</button>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="flex justify-center items-center space-x-2">
                                                                    <span class="text-xl text-gray-400 font-medium py-8">No Course code found...</span>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                        @endforelse
                                                    @elseif ($role_id === 5)
                                                        @forelse ($students as $student)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex justify-between items-center">
                                                                    <div class="text-sm font-medium text-gray-900">{{ $student->yearAndSections->name }}</div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                {{-- <button  class="text-indigo-600 hover:text-indigo-900">Edit</button> --}}
                                                                <button wire:click.prevent="remove({{$student->id}})" class="text-red-600 hover:text-red-900">Delete</button>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="2">
                                                                <div class="flex justify-center items-center space-x-2">
                                                                    <span class="text-xl text-gray-400 font-medium py-8">No year and section found...</span>
                                                                </div>
                                                            </td>
                                                        </tr> 
                                                        @endforelse
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="hidden sm:block" aria-hidden="true"><div class="py-5"><div class="border-t border-gray-200"></div></div></div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Done') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- Import Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="importModal">
            <x-slot name="title">
                <p class="text-sm text-yellow-700 bg-yellow-200 p-2 rounded-lg">
                    <span class="text-red-400">*</span>Note: Please check the excel file headings with matching fields in the table below.
                </p>
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="importStudent">
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="flex flex-col justify-center items-center space-y-1">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <div class="flex text-sm text-gray-600">
                        <label for="studentFile" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Import a file</span>
                            <input wire:model="studentFile" id="studentFile" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                        </div>
                        <x-jet-validation-errors class="mb-4" />
                        @if (session()->has('errorMessage'))
                        <div class="mx-5">
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full">
                                        <thead class="bg-red-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-red-500 uppercase tracking-wider">Row number</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-red-500 uppercase tracking-wider">Values</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-red-500 uppercase tracking-wider">Errors</th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-red-100">
                                            @foreach (session()->get('errorMessage') as $validation)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-red-900">
                                                        {{ $validation->row() }}
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-red-900">
                                                        {{ $validation->values() [$validation->attribute()] }}
                                                    </div>
                                                </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-red-900">
                                                        <ul>
                                                            @foreach ($validation->errors() as $e)
                                                                <li>{{ $e }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endif
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

                <x-jet-button class="ml-2" wire:click="importStudent" wire:loading.attr="disabled">
                    {{ __('Import') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
        {{-------------------------------------------------- View Modal --------------------------------------------------}}
        <x-jet-dialog-modal maxWidth="5xl" wire:model.defer="viewModal">
            <x-slot name="title">
                {{ __('Evaluation Details') }}
            </x-slot>

            <x-slot name="content">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id number</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">College</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject Code</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Year & section</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10"><img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt=""></div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                                        <div class="text-sm text-gray-500">jane.cooper@example.com</div>
                                    </div>
                                </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                    <div class="text-sm text-gray-500">Optimization</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-jet-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Okay') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
