<div class="space-y-2">
    <div class=" w-60">
        <label class="block text-sm font-medium text-gray-700">Filter Instructor</label>
        <select wire:model="user" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">-- choose instructor --</option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <x-jet-input-error for="user"/>
    </div>
    <div class="flex flex-col col-span-3">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course Code</th>
                                <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @if (!is_null($instructors))
                            @forelse ($instructors as $instructor)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-between items-center">
                                        <div class="text-sm font-medium text-gray-900">{{ $instructor->CourseCodes->name }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button  class="text-indigo-600 hover:text-indigo-900">Edit</button>
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
                        @else
                            @foreach ($faculties as $faculty)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-between items-center">
                                        <div class="text-sm font-medium text-gray-900">{{ $faculty->CourseCodes->name }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                    <button wire:click.prevent="remove({{$faculty->id}})" class="text-red-600 hover:text-red-900">Delete</button>
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
