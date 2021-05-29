<span x-data="{ show: false }" class=" ml-10">
    <button @click="show = !show">
        <i class="far fa-user text-xl mr-3"></i>
        {{ auth()->user()->name }}
    </button>
    <!-- Menu -->
    <div x-show.transition="show" @click.away="show = false" 
        class="absolute right-0 bg-white h-full w-96 p-5 z-50">
        <ul>
            <li><a href="{{ url(app()->getlocale() . '/' . 'profile') }}">Profile</a></li>
            <li><a href="{{ url(app()->getlocale() . '/' . 'add/user/speciality') }}">Speciality</a></li>
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






