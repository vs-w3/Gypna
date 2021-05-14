<x-layouts.admin >

    <div class="my-10 pb-5 border-b flex justify-end">
        <a href="{{ url('admin/add/speciality') }}" class="bg-nt-14 rounded-md py-3 px-5 cursoir-pointer text-white font-semibold">Add</a>
    </div>
    
    <livewire:datatable :model="$model" :setting="$setting" /> 

</x-layouts.admin>