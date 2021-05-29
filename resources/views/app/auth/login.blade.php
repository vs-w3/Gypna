<x-layouts.main>
    <x-partials.common.page-hood :page-title="__('auth.authenticate')"/>
    <div class="container mx-auto -mt-64 mb-40 flex">
        <div class="w-8/12 mx-auto rounded-bl-5xl rounded-tr-5xl flex gypna-v2-bg-white-green">
            <div class="w-4/12 rounded-bl-5xl auth-left-img">
                
            </div>
            <div class="w-8/12 p-20">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                
                    <x-partials.form.auth-input-text name="email" type="email" placeholder="Email" />
                    <x-partials.form.auth-input-text name="password" type="password" placeholder="Password" />
                    <x-partials.form.auth-input-checkbox id="remember_me" name="remember" label="Remeber Me" />
            
            
                
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline py-2 text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                                <p class="border-white">
                                    {{ __('auth.forgot_your_password') }}
                                </p>
                                
                            </a>
                        @endif
                
                        <button class="ml-5 px-10 py-1 gypna-v2-bg-mid-green text-white rounded-br-2xl" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</x-layouts.main>    