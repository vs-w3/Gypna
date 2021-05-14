<form method="POST" action="{{ route('logout') }}">
    @csrf


    <div class="flex items-center justify-end mt-4">

        <x-jet-button class="ml-4">
            {{ __('Logout') }}
        </x-jet-button>
    </div>
</form>