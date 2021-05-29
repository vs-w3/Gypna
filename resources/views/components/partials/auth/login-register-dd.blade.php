<span x-data="{ show: false }" class=" ml-10">
    <button @click="show = !show">
        <i class="far fa-user text-xl mr-3"></i>
        Login
    </button>
    <div x-show.transition="show" @click.away="show = false" 
        class="absolute right-0 bg-white h-full w-96 p-5 z-50">
        
        <div class="" x-data="{ tab: 'login' }">
            <div class="my-10 flex items-stretch">
                <button class="px-5 py-1 border gypna-v2-border-muddy-green" 
                    @click="tab = 'login'"
                    x-show=" tab !== 'login' ">Login</button>
                <button class="px-5 py-1 border gypna-v2-border-muddy-green gypna-v2-bg-muddy-green gypna-v2-text-dark-green" 
                    @click="tab = 'login'" 
                    x-show=" tab === 'login' ">Login</button>

                <button class="px-5 py-1 border gypna-v2-border-muddy-green" 
                    @click="tab = 'register'"
                    x-show=" tab !== 'register' ">Register</button>
                <button class="px-5 py-1 border gypna-v2-border-muddy-green gypna-v2-bg-muddy-green gypna-v2-text-dark-green" 
                    @click="tab = 'register'"
                    x-show=" tab === 'register' ">Register</button>
            </div>
            
            <x-partials.auth.tab-login />
            <x-partials.auth.tab-register />
            
        </div>
    </div>
</span>


