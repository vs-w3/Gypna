<x-layouts.admin >

    <form action="{{ url('admin/events/add') }}" method="post">
        @csrf
        

        {{ $event }}
        <button type="submit">save</button>
    </form>




</x-layouts.admin>