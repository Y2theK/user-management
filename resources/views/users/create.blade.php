<x-app-layout>
    <x-slot name="header">
        {{ __('Add New User') }}
    </x-slot>

    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">

            <form>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="username">Name</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                    </div>

                    <div>
                        <label class="text-gray-700" for="username">Username</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                    </div>

                    <div class="relative">
                        <label class="text-gray-700" for="username">Role</label>
                        <select
                            class="appearance-none h-10 mt-2 rounded-md border block w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach($roles as $role)
                            <option>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-700" for="username">Phone</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="number">
                    </div>

                    <div>
                        <label class="text-gray-700" for="emailAddress">Email Address</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email">
                    </div>

                    <div>
                        <label class="text-gray-700" for="username">Address</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                    </div>

                    <div class="relative">
                        <label class="text-gray-700" for="username">Role</label>
                        <select
                            class="appearance-none h-10 mt-2 rounded-md border block w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="mt-10">
                        <input type="checkbox" class="form-checkbox  h-5 w-5 text-indigo-600" checked><span
                            class="ml-2 text-gray-700">is Active</span>
                    </div>
                    <div>
                        <label class="text-gray-700" for="password">Password</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                    </div>

                    <div>
                        <label class="text-gray-700" for="passwordConfirmation">Password Confirmation</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                    </div>

                </div>

                <div class="flex justify-end mt-4">
                    <button
                        class="px-4 py-2 bg-indigo-800 text-gray-200 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>