<x-app-layout>
    <x-slot name="header">
        {{ __("Users") }}
    </x-slot>

    <div class="grid grid-cols-3 gap-4">
        <div class="mt-4 col-span-2">
            <div class="">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 pb-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>

                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Created at
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>

                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $role->name }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                          {{ $role->created_at->format('Y m d') }}
                                        </p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
                <form>
                    
                    <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                        <h3 class="text-sm">Add Role</h3>
                    </div>

                    <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                        <label class="text-xs">Name</label>

                        <div class="mt-2 relative rounded-md shadow-sm">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                                </svg>
                            </span>

                            <input type="text"
                                class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600" />
                        </div>
                    </div>

                    <div class="px-5 py-3 text-right">
                      
                        <button
                            class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>