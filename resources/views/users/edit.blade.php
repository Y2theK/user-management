<x-app-layout>
    <x-slot name="header">
        {{ __('Add New User') }}
    </x-slot>

    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            @include('components.flash-messages.errors')
            <form action="{{ route('admin-users.update',$admin_user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="username">Name</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="name" autocomplete="name" value="{{ $admin_user->name }}">
                    </div>

                    <div>
                        <label class="text-gray-700" for="username">Username</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="username" autocomplete="username" value="{{ $admin_user->username }}">
                    </div>

                    <div class="relative">
                        <label class="text-gray-700" for="username">Role</label>
                        <select name="role_id"
                            class="appearance-none h-10 mt-2 rounded-md border block w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}" @selected($role->id === $admin_user->role_id)>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-700" for="username">Phone</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="number" name="phone" autocomplete="phone" value="{{ $admin_user->phone }}">
                    </div>

                    <div>
                        <label class="text-gray-700" for="emailAddress">Email Address</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email" name="email" autocomplete="email" value="{{ $admin_user->email }}">
                    </div>

                    <div>
                        <label class="text-gray-700" for="username">Address</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="address" autocomplete="address" value="{{ $admin_user->address }}">
                    </div>

                    <div class="relative">
                        <label class="text-gray-700" for="username">Gender</label>
                        <select name="gender"
                            class="appearance-none h-10 mt-2 rounded-md border block w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="male" @selected($admin_user->gender === 'male')>Male</option>
                            <option value="female"  @selected($admin_user->gender === 'female')>Female</option>
                            <option value="other"  @selected($admin_user->gender === 'other')>Other</option>
                        </select>
                    </div>

                    <div class="mt-10">
                        <input type="checkbox" class="form-checkbox  h-5 w-5 text-indigo-600" @checked($admin_user->is_active) name="is_active" ><span
                            class="ml-2 text-gray-700">is Active</span>
                    </div>
                    <div>
                        <label class="text-gray-700" for="password">Password</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password" name="password">
                    </div>

                    <div>
                        <label class="text-gray-700" for="passwordConfirmation">Password Confirmation</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password" name="password_confirmation">
                    </div>

                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-800 text-gray-200 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>