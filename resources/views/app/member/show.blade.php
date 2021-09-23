<!-- Members Index View -->

<x-layouts.main>
    <x-templates.pages.page-container-2xl-left-main-right-a >

        <x-slot name="leftSide">
            <x-sections.member.left-nav />
        </x-slot>
        <x-slot name="main">
            <livewire:pages.member.personal-data view="profile_personal_data" :user="$user" />
            <livewire:features.address.address view="profile_address_section" :addressable="$user->userable" />
            <livewire:features.speciality.speciality view="profile_speciality_section" :specialityable="$user" />
        </x-slot>

        <x-slot name="rightSide">

        </x-slot>

    </x-templates.pages.page-container-2xl-left-main-right-a>
</x-layouts.main>