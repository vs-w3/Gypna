<header class="pb-5 pt-10 px-10 xl:px-0 -mt-20 w-full h-20 shadow-lg z-10 fixed bg-white">
    <div class="lg:container mx-auto flex justify-between">
        <div class="">
            <a href="/">Home</a>
        </div>
        <!-- Navigation -->
        <div class="hidden lg:flex justify-end">
            <ul class="flex justify-end mr-10 xl:mr-20 text-sm xl:text-base whitespace-nowrap">   
                <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.about_us') }}" />
                <x-partials.header.menu-item :url="app()->getlocale() . '/events'" title="{{ __('nav.events') }}" />
                <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.members') }}" />
                <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.partners') }}" />
                <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.media') }}" />
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