<div class="my-5 font-bold text-nt-4" x-data="{ active: false }" >
    <h2 @click=" active = !active " class="px-5 cursor-pointer">
        <i class="{{ $data['icon'] }}"></i>
        <span class="pl-5">{{ $data['title']}}</span>
    </h2>
    <div x-show="active" class="bg-nt-3 py-2 pl-7 pr-5">
        @foreach ($data['items'] as $item)
            <a class="block py-2" href="/{{ $item['route']}}">{{ $item['title'] }}</a>  
        @endforeach
    </div>
</div>