<ul class="mt-12">
    <x-navs.left-nav-li-a>
        <x-slot name="sectionIDSelector">lw_pages_member_personal-data</x-slot>
        <x-slot name="icon">{{ config('icons.fa.profile_data') }}</x-slot>
        <x-slot name="title">{{ __('words.personal_data') }}</x-slot>
    </x-navs.left-nav-li-a>

    <x-navs.left-nav-li-a>
        <x-slot name="sectionIDSelector">lw_features_address_r_address</x-slot>
        <x-slot name="icon">{{ config('icons.fa.map_marked') }}</x-slot>
        <x-slot name="title">{{ __('words.address') }}</x-slot>
    </x-navs.left-nav-li-a>

    <x-navs.left-nav-li-a>
        <x-slot name="sectionIDSelector">lw_features_speciality_r_speciality</x-slot>
        <x-slot name="icon">{{ config('icons.fa.user_med') }}</x-slot>
        <x-slot name="title">{{ __('words.speciality') }}</x-slot>
    </x-navs.left-nav-li-a>
</ul>