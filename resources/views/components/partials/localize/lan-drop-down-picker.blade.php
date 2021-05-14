<div class="inline-block" x-data="{ show: false }">
    
    <button @click="show=!show">{{ App::getLocale() }}</button>
    <div class="absolute min-w-10 py-2 px-3 bg-gray-50 border border-gray-300 rounded" x-show="show" @click.away="show = false">
        <a class="block" href="{{ str_replace('/'.App::getLocale(), "/ka", url()->current()) }}">
            ka
        </a>
        <a class="block" href="{{ str_replace('/'.App::getLocale(), "/en", url()->current()) }}">
            en
        </a>
    </div>
</div>