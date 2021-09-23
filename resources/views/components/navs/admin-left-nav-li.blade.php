<li class="list-none my-3">
    <a class="px-5 text-white" href="javascript:void(0)" @click="subNav = '{{ $subNavVal }}'">
        <i class="{{ $icon }} inline-block w-8"></i>
        <span>{{ $navTitle }}</span>
    </a>
    <ul class="pl-10 pr-2 py-2 bg-gray-200 text-gray-900" x-show="subNav == '{{ $subNavVal }}'">
       {{ $subNavBody }} 
    </ul>
</li>