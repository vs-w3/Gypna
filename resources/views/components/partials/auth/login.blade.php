<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="">
        <label for="email">Email</label>
        <input class="w-full rounded-md border-gray-300" type="email" name="email" id="email" required autofocus >
    </div>

    <div class="my-5">
        <label for="password">Password</label>
        <input class="w-full rounded-md border-gray-300" type="password" name="password" id="password" required autofocus >
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-jet-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-jet-button class="ml-4">
            {{ __('Log in') }}
        </x-jet-button>
    </div>
</form>