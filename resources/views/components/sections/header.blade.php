<header class="bg-gray-50 bg-opacity-50 py-2 px-5 h-20 block w-full">
    <div class="lg:container lg:mx-auto flex">
        <div class="bg-green-400 w-1/12 h-16">
            <a href="/" rel="noopener noreferrer">logo</a>
        </div>
        <nav class="w-11/12">
            <!-- Nav top line: Membership; Partnership; lan -->
            <div class="flex justify-end space-x-10 h-8">
                <x-partials.header.mpbutton url="{{ route('getMembership', app()->getLocale()) }}" icon="fas fa-users" title="Memebership" />
                <x-partials.header.mpbutton url="{{ route('getPartnership', app()->getLocale()) }}" icon="far fa-handshake" title="Partnership" />

                <x-partials.localize.lan-drop-down-picker />

                @guest
                <span x-data="{ show: false }" class="relative">
                    <button @click="show = !show">Login</button>
                    <div x-show="show" @click.away="show = false" 
                        class="absolute right-0 top-10 w-80 min-h-full bg-gray-50 border border-gray-300 rounded-md p-5">
                        <x-partials.auth.login />
                    </div>
                </span>
                @endguest
                @auth
                <span x-data="{ show: false }" class="relative">
                    <button @click="show = !show">{{ Auth::user()->name }}</button>
                    <div x-show="show" @click.away="show = false" 
                        class="absolute right-0 top-10 w-80 min-h-full bg-gray-50 border border-gray-300 rounded-md p-5">
                        <x-partials.auth.user />
                    </div>
                </span>
                @endauth
            </div>
            <ul class="mt-2 flex justify-end space-x-4 h-10">
                <a href="admin"><button>Admin Panel</button></a>
                <a href="{{ url(app()->getlocale() . '/aboutus')}}"><button>About Us</button></a>
                
                <li>Projects</li>
                <li>Media</li>
                <li>Partners</li>
                <li>Contacts</li>
            </ul>
        </nav>
    </div>
</header>