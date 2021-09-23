<div class="w-3/4 px-10 h-auto">
    <livewire:sections.profile.person title="User Data" />
    <livewire:features.address.address view="profile_address_section" :addressable="$user" />
    <livewire:features.speciality.speciality view="profile_speciality_section" :specialityable="auth()->user()" />
    
    
</div>