<div>
    <div class="space-y-2">
        <section class="flex justify-center items-center mt-2">
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
        {{-------------------------------------------------- Add button for dean --------------------------------------------------}}
        <div class="flex justify-between items-center">
            <div class="flex justify-start items-center space-x-2">
                <x-jet-button wire:click.prevent="createOpenModal">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    Create New User
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
                        <option value="status">Status</option>
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

        {{-------------------------------------------------- Table --------------------------------------------------}}
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">
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
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900"> {{ $user->name }} </div>
                                            <div class="text-sm text-gray-500"> {{ $user->email }} </div>
                                        </div>
                                    </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> {{ $user->college }} </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if (in_array($user->role_id, [1, 2, 4]))
                                            @if ($user->status === 1)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800"> Regular </span>
                                            @elseif ($user->status === 0)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Part time </span>
                                            @endif
                                        @elseif ($user->role_id === 3)
                                            @if ($user->status === 1)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800"> Staff </span>
                                            @endif
                                        @elseif ($user->role_id === 5)
                                            @if ($user->status === 1)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800"> Enrolled </span>
                                            @elseif ($user->status === 0)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Pending </span>
                                            @endif
                                        @endif
                                    </td>
                                    @if ( $user->role_id === 1 )
                                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> Admin </td>
                                    @elseif ( $user->role_id === 2 )
                                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> Dean </td>
                                    @elseif ( $user->role_id === 3 )
                                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> Secretary </td>
                                    @elseif ( $user->role_id === 4 )
                                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> Instructor </td>
                                    @elseif ( $user->role_id === 5 )
                                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> Student </td>
                                    @elseif ( $user->role_id === 6 )
                                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> Human Resource </td>
                                    @endif
                                    <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm text-gray-900">{{ $user->created_at->ToFormattedDateString() }}</div> </td>
                                    <td class="px-6 py-4 whitespace-nowrap"> <div class="text-sm text-gray-900">{{ $user->created_at->ToFormattedDateString() }}</div> </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @if (!in_array(auth()->user()->role_id, [1]))
                                        @if (in_array($user->role_id, [1]))
                                        @else
                                        <button wire:click.prevent="editOpenModal({{$user->id}})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        @endif
                                        @else
                                        <button wire:click.prevent="editOpenModal({{$user->id}})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                    @endif
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


        {{-------------------------------------------------- Create Modal --------------------------------------------------}}
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
                                <option>-- choose role --</option>
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
                        <div x-show="role_id == 2 || role_id == 4" class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">College</label>
                            <select wire:model="college" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($colleges as $college)
                                <option value="{{ $college->college }}">{{ $college->college }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="college"/>
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
        <x-jet-dialog-modal wire:model.defer="editModal">
            <x-slot name="title">
                {{ __('Edit user') }}
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="update" x-data="{role: 1}">
                    <div class="space-y-4">
                        @if ($role_id == 1)

                        @else
                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Role</label>
                            <select x-model="role" wire:model="role_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>-- choose role --</option>
                                <option value="2">Dean</option>
                                <option value="3">Secretary</option>
                                <option value="4">Instructor</option>
                                <option value="5">Student</option>
                                <option value="6">HR</option>
                            </select>
                            <x-jet-input-error for="role_id"/>
                        </div>
                        @endif

                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Name</label>
                            <input wire:model.lazy="name" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <x-jet-input-error for="name"/>
                        </div>
                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Id number</label>
                            <input wire:model.lazy="id_number" type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <x-jet-input-error for="id_number"/>
                        </div>
                        <div class="col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input wire:model.lazy="email" type="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <x-jet-input-error for="email"/>
                        </div>
                        @if (in_array($role_id ,[1,3]))
                        @else
                        <div class="col-span-6" x-show="role == 2" >
                            <label class="block text-sm font-medium text-gray-700">College</label>
                            <select wire:model="college" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($colleges as $college)
                                <option value="{{ $college->college }}">{{ $college->college }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="college"/>
                        </div>
                        @endif
                        @if (in_array($role_id, [1,2,3]))
                        @else
                        <div class="col-span-6">
                            <div class="flex items-center">
                                <x-srf-form.radio-input model="status" name="status" id="1A2" for="1A2" value="1"> {{ $role_id == 4 ? 'Regular' : 'Enrolled'}} </x-srf-form.radio-input>
                            </div>
                            <div class="flex items-center">
                                <x-srf-form.radio-input model="status" name="status" id="1A1" for="1A1" value="0"> {{ $role_id == 4 ? 'Part time' : 'Pending'}} </x-srf-form.radio-input>
                            </div>
                        </div>
                        @endif
                    </div>
                </form>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>

        {{-------------------------------------------------- Import Modal --------------------------------------------------}}
        <x-jet-dialog-modal wire:model.defer="importModal">
            <x-slot name="title">
                <label class="block text-sm font-medium text-gray-700">
                    Import user
                </label>
            </x-slot>

            <x-slot name="content">
                <form wire:submit.prevent="importStudent">
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="flex flex-col justify-center items-center space-y-1">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <div class="flex text-sm text-gray-600">
                        <label for="studentFile" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input wire:model="studentFile" id="studentFile" type="file" class="sr-only">
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

                <x-jet-button class="ml-2" wire:click="importStudent" wire:loading.attr="disabled">
                    {{ __('Import') }}
                </x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
