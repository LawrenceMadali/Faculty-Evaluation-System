<div>
    <div class="space-y-5 mt-5">
        <section class="text-gray-600 bg-white rounded-md body-font">
            <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/5 w-1/2">
                <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $users }}</h2>
                <p class="leading-relaxed">Total Users</p>
                </div>
                <div class="p-4 sm:w-1/5 w-1/2">
                <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $deans }}</h2>
                <p class="leading-relaxed">Dean</p>
                </div>
                <div class="p-4 sm:w-1/5 w-1/2">
                <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $secretaries }}</h2>
                <p class="leading-relaxed">Secretary</p>
                </div>
                <div class="p-4 sm:w-1/5 w-1/2">
                <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $instructors }}</h2>
                <p class="leading-relaxed">Instructor</p>
                </div>
                <div class="p-4 sm:w-1/5 w-1/2">
                <h2 class="font-medium sm:text-4xl text-3xl text-gray-900">{{ $students }}</h2>
                <p class="leading-relaxed">Student</p>
                </div>
            </div>
            </div>
          </section>

          {{-- <div class="flex justify-end items-center space-x-4">

            <div class="relative inline-flex">
                <select wire:model="perPage" class="text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <div class="relative inline-flex">
                <select wire:model="sortAsc" class="text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="1">Ascending</option>
                    <option value="0">Descending</option>
                </select>
            </div>

            <div class="relative inline-flex">
                <select wire:model="sortField" class="text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="id_number">Id number</option>
                    <option value="name">Name</option>
                    <option value="status">Status</option>
                    <option value="role_id">Role</option>
                    <option value="created_at">Created at</option>
                </select>
            </div>

            <div>
                <x-jet-input wire:model="search" type="text" placeholder="Search..."/>
            </div>
        </div> --}}

          {{-- <div class="flex flex-col space-y-4">
            <div class="-my-2 overflow-x-auto xs:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full xs:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 xs:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <x-table.head> Id number </x-table.head>
                        <x-table.head> name </x-table.head>
                        <x-table.head> status </x-table.head>
                        <x-table.head> role </x-table.head>
                        <x-table.head> created at </x-table.head>
                        <x-table.head> updated at </x-table.head> --}}
                        {{-- <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                        </th> --}}
                    {{-- </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($usersTable as $user )
                    <tr wire:loading.delay.class="opacity-50">
                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500"> --}}
                            {{-- <input value="{{ $user->id }}" name="selectedInstructor" type="checkbox" class="mr-2 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> --}}
                            {{-- {{ $user->id_number }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="">
                            </div>
                            <div class="ml-4">
                            <div class="text-xs font-medium text-gray-900">
                                {{ $user->name }}
                            </div>
                            <div class="text-xs text-gray-500">
                                {{ $user->email }}
                            </div>
                            </div>
                        </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if (in_array($user->role_id, [1, 2, 4]))
                                @if ($user->status === 1)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Regular
                                    </span>
                                @elseif ($user->status === 0)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Part time
                                    </span>
                                @endif
                            @elseif ($user->role_id === 3)
                                @if ($user->status === 1)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Contructual
                                    </span>
                                @endif
                            @elseif ($user->role_id === 5)
                                @if ($user->status === 1)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Enrolled
                                    </span>
                                @elseif ($user->status === 0)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Unenrolled
                                    </span>
                                @endif
                            @endif
                        </td>
                        @if ( $user->role_id === 1 )
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                Admin
                            </td>
                        @elseif ( $user->role_id === 2 )
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                Dean
                            </td>
                        @elseif ( $user->role_id === 3 )
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                Secretary
                            </td>
                        @elseif ( $user->role_id === 4 )
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                Instructor
                            </td>
                        @elseif ( $user->role_id === 5 )
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                Student
                            </td>
                        @endif
                            <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                            {{ $user->created_at->toFormattedDateString() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                            {{ $user->updated_at->toFormattedDateString() }}
                        </td> --}}
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-xs font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td> --}}
                    {{-- </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="flex justify-center items-center space-x-2">
                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                <span class="text-xl text-gray-400 font-medium py-8">No users found...</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                </div>
            </div>
            </div>
            <div>
            {{ $usersTable->links() }}
            </div>
        </div> --}}
    </div>

</div>
