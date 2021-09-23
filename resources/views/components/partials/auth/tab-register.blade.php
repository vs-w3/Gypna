<div x-show.transition.in="tab === 'register'">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <x-partials.auth.registration-name-section />
        
        <x-forms.auth-input-text name="email" type="email" placeholder="Email" />
        <x-forms.auth-input-text name="password" type="password" placeholder="Password" />
        <x-forms.auth-input-text name="password_confirmation" type="password" placeholder="Repeat Password" />
    
        <div class="flex items-center justify-end mt-4">
            <button class="ml-10 px-5 py-1 gypna-v2-bg-mid-green text-white rounded-br-2xl" type="submit">Submit</button>
        </div>
    </form>
</div>