<li class="my-4 text-base"
    x-data="{ iconStyle: false }"
    @mouseover="iconStyle = true"
    @mouseout="iconStyle = false">
    <a href="#{{ $sectionIDSelector }}">
        <i class="{{ $icon }} text-xl mr-3 inline-block w-5"
            :class="{ 'text-g-green-500': iconStyle }"></i>
        <span>{{ $title }}</span>
    </a>
</li>