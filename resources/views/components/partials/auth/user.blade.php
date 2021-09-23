<span x-data="{ show: false }" class=" ml-10">
    <button @click="show = !show">
        <i class="far fa-user text-xl mr-3"></i>
        {{ auth()->user()->name }}
    </button>
    <!-- Menu -->
    <div class="absolute top-20 right-0 bg-white h-auto w-96 p-5 z-50 shadow-lg"
        x-show.transition="show" 
        @click.away="show = false" >
        <ul class="mt-5 text-lg font-inter">
            @if (auth()->user()->userable_type == 'App\Models\PersonProfile')
                <x-dynamic-component component="partials.profile.personal.dd" />
            @elseif (auth()->user()->userable_type == 'App\Models\CompanyProfile')
                <x-dynamic-component component="partials.profile.company.dd" />
            @endif
            
            
        </ul>
        
        <div class="mt-10 pt-1 border-t">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            
            
                <div class="flex items-center justify-end mt-4">
            
                    <x-jet-button class="ml-4">
                        {{ __('Logout') }}
                    </x-jet-button>
                </div>
            </form> 
        </div>
        
        
    </div>
</span>






