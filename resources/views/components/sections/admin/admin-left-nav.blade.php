<div class="bg-nt-2 w-2/12 min-h-screen">

    <ul x-data="{ subNav: null }">

        <x-navs.admin-left-nav-li sub-nav-val="speciality">
            <x-slot name="icon">{{ config('icons.fa.building')}}</x-slot>
            <x-slot name="navTitle">ჩვენს შესახებ</x-slot>
            <x-slot name="subNavBody">
                <x-navs.admin-left-sub-nav-li url="admin/aboutus" title="ნახვა" />
                <x-navs.admin-left-sub-nav-li url="admin/add/aboutus" title="დამატება" />
            </x-slot>
        </x-navs.admin-left-nav-li>

        <x-navs.admin-left-nav-li sub-nav-val="about_us">
            <x-slot name="icon">{{ config('icons.fa.user_med')}}</x-slot>
            <x-slot name="navTitle">სპეციალობა</x-slot>
            <x-slot name="subNavBody">
                <x-navs.admin-left-sub-nav-li url="admin/specialities" title="ნახვა" />
                <x-navs.admin-left-sub-nav-li url="admin/add/speciality" title="დამატება" />
            </x-slot>
        </x-navs.admin-left-nav-li>

        <x-navs.admin-left-nav-li sub-nav-val="members">
            <x-slot name="icon">{{ config('icons.fa.user_group')}}</x-slot>
            <x-slot name="navTitle">წევრები</x-slot>
            <x-slot name="subNavBody">
                <x-navs.admin-left-sub-nav-li url="admin/members" title="ნახვა" />
            </x-slot>
        </x-navs.admin-left-nav-li>

        <x-navs.admin-left-nav-li sub-nav-val="event">
            <x-slot name="icon">{{ config('icons.fa.doctor_note')}}</x-slot>
            <x-slot name="navTitle">ღონისძიება</x-slot>
            <x-slot name="subNavBody">
                <x-navs.admin-left-sub-nav-li url="admin/events" title="ნახვა" />
                <x-navs.admin-left-sub-nav-li url="admin/events/add" title="დამატება" />
            </x-slot>
        </x-navs.admin-left-nav-li>

        <x-navs.admin-left-nav-li sub-nav-val="topic">
            <x-slot name="icon">{{ config('icons.fa.article_r')}}</x-slot>
            <x-slot name="navTitle">თემები</x-slot>
            <x-slot name="subNavBody">
                <x-navs.admin-left-sub-nav-li url="admin/topics" title="ნახვა" />
                <x-navs.admin-left-sub-nav-li url="admin/topics/add" title="დამატება" />
            </x-slot>
        </x-navs.admin-left-nav-li>
    </ul>
    
</div>