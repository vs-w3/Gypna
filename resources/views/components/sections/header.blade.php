<header class="bg-white py-2 pb-5 pt-10 h-20">
    <div class="lg:container mx-auto flex justify-between">
        <div>
            <a href="/">Home</a>
        </div>
        <!-- Navigation -->
        <div class="flex justify-end">
            <ul class="flex justify-end mr-20">
                <a class="mr-44" href="admin"><button>Admin Panel</button></a>
                <x-partials.header.menu-item title="{{ __('nav.about_us') }}" />
                <x-partials.header.menu-item title="{{ __('nav.events') }}" />
                <x-partials.header.menu-item title="{{ __('nav.members') }}" />
                <x-partials.header.menu-item title="{{ __('nav.partners') }}" />
                <x-partials.header.menu-item title="{{ __('nav.media') }}" />
            </ul>
    
            <!-- Language Picker -->
            <x-partials.localize.lan-drop-down-picker />
    
            <!-- Auth -->
            @guest
                <x-partials.auth.login-register-dd />
            @endguest
            @auth
                <x-partials.auth.user />
            @endauth
        </div>
        

    </div>
</header>