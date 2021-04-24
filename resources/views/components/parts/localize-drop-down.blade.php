<div class="inline-block" x-data="{ show: false }">
    {{ App::setLocale('ka')}}
    <button @click="show=!show">{{ App::getLocale() }}</button>
    <div class="absolute min-w-10 py-2 px-3 bg-white border border-gray-200 rounded-sm" 
        x-show="show" @click.away="show = false">
        <a class="block" href="{{ str_replace('/'.App::getLocale().'/', "/ka/", url()->current()) }}">
            ka
        </a>
        <a href="{{ str_replace('/'.App::getLocale().'/', "/en/", url()->current()) }}">
            en
        </a>
    </div>
</div>