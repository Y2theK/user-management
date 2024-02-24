<x-app-layout>
    <x-slot name="header">
        {{ __('Add New User') }}
    </x-slot>

    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            @include('components.flash-messages.errors')
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="username">Name</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text" name="name">
                    </div>
                </div>
                <div class="mt-8">
                    @foreach($features as $feature)
                       <div class="mt-8 grid grid-cols-8">
                        <label class="inline-flex items-center mr-3 capitalize">{{ $feature->name }}</label>
                            <!-- <label class="inline-flex items-center ml-8">
                                <input type="checkbox" name="" class="form-checkbox h-5 w-5 text-indigo-600" >
                                    <span class="ml-2 text-gray-700">All</span>
                            </label> -->
                            @foreach($feature->permissions as $permission)
                           
                            <label class="inline-flex items-center ml-8">
                                <input type="checkbox" name="permissions[]" class="form-checkbox h-5 w-5 text-indigo-600" value="{{ $permission->id }}">
                                    <span class="ml-2 text-gray-700 capitalize">{{ str_replace('_',' ',$permission->name)  }}</span>
                            </label>
                            @endforeach
                       </div>
                    @endforeach
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-800 text-gray-200 rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>