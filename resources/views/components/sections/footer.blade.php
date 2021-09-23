<footer class="footer pt-20 px-5 min-w-0 lg:pt-40 pb-5 xl:px-0">
    <div class="container mx-auto lg:flex lg:justify-between">
        <div>
            <h2 class="text-md text-center font-semibold lg:text-4xl lg:font-normal">Georgian Yang Neonatologists & Pediatrics</h2>
            <nav class="">
                <ul class="whitespace-nowrap flex-wrap flex my-10 text-sm lg:mt-20 lg:mb-0">
                    <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.about_us') }}" />
                    <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.events') }}" />
                    <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.members') }}" />
                    <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.partners') }}" />
                    <x-partials.header.menu-item :url="app()->getlocale() . '/aboutus'" title="{{ __('nav.media') }}" />
                </ul>
            </nav>
        </div>
        <div>
            <div>
                <button class="block text-center border rounded-bl-2xl gypna-v2-border-mid-green w-full bg-white gypna-v2-text-mid-green py-2 lg:py-3 lg:px-20">
                    Become Member
                </button>
                <button class="block text-center border rounded-bl-2xl gypna-v2-border-mid-green w-full gypna-v2-bg-mid-green text-white py-2 mt-5 lg:py-3 lg:px-20">
                    Become Partner
                </button>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-20">
        <p class="text-sm text-center xl:text-left">
            <span class="gypna-v2-text-mid-green">Copyright ©2021 All rights reserved</span> 
            <span class="hidden"> | Georgian Yang Pediatrics & Neonatologists Associations</span>
        </p>
    </div>
</footer>