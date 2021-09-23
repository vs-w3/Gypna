<x-layouts.main>
    <x-partials.common.page-hood :page-title="__('auth.register')"/>
    <div class="container mx-auto -mt-64 mb-40 flex">
        <div class="w-8/12 mx-auto rounded-bl-5xl rounded-tr-5xl flex gypna-v2-bg-white-green">
            <div class="w-4/12 rounded-bl-5xl auth-left-img">
            </div>
            <div class="w-8/12 p-20">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!--<x-partials.form.auth-input-select name="user_type" />-->
                    <x-partials.auth.registration-name-section />
                    <x-forms.auth-input-text name="email" type="email" placeholder="Email" />
                    <x-forms.auth-input-text name="password" type="password" placeholder="Password" />
                    <x-forms.auth-input-text name="password_confirmation" type="password" placeholder="Repeat Password" />
            
            
                <div class="flex items-center justify-end mt-4">
                    <button class="ml-10 px-10 py-1 gypna-v2-bg-mid-green text-white rounded-br-2xl" type="submit">Submit</button>
                </div>
                </form>

            </div>
            
        </div>
    </div>
</x-layouts.main>    