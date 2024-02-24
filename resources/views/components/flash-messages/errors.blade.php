@if ($errors->any())
    <div class="">
        <div class="mx-3 mt-2 py-3 px-4 bg-red-50 rounded-md">
            <p class="text-gray-600 text-sm"> {{ $errors->first() }}</p>
        </div>
    </div>
@enderror
