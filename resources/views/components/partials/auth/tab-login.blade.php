<div x-show.transition.in="tab === 'login'">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <x-partials.form.auth-input-text name="email" type="email" placeholder="Email" />
        <x-partials.form.auth-input-text name="password" type="password" placeholder="Password" />
        <x-partials.form.auth-input-checkbox id="remember_me" name="remember" label="Remeber Me" />
    
        


    
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
    
            <button class="ml-10 px-5 py-1 gypna-v2-bg-mid-green text-white rounded-br-2xl" type="submit">Submit</button>
        </div>
    </form>
</div>