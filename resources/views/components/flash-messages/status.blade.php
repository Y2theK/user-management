@session('success') 
<div class="">
    <div class="mx-3 mt-2 py-3 px-4 bg-green-50 rounded-md">
        <p class="text-gray-600 text-sm">{{ session('success') }}</p>
    </div>
</div>
@endsession 
@session('fail') 
<div class="">
    <div class="mx-3 mt-2 py-3 px-4 bg-red-50 rounded-md">
        <p class="text-gray-600 text-sm">{{ session('fail') }}</p>
    </div>
</div>
@endsession 