<div class="inline-block" x-data="{ show: false }">
    
    <button class="gypna-v2-bg-mid-green px-1 py-1 rounded-bl-lg text-white text-xs" @click="show=!show">
        {{ strtoupper(App::getLocale()) }}
    </button>

    <div class="absolute min-w-10 py-2 px-3 bg-white z-50" x-show.transition="show" @click.away="show = false">
        <a class="block" href="{{ str_replace('/'.App::getLocale(), "/ka", url()->current()) }}">
            ka
        </a>
        <a class="block" href="{{ str_replace('/'.App::getLocale(), "/en", url()->current()) }}">
            en
        </a>
    </div>
</div>