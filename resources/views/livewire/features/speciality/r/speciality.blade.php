<div id="lw_features_speciality_r_speciality">
    <x-templates.sections.profile-section>
        <x-slot name="sectionHeader">
            <!-- Profile Section Header -->
            <x-templates.sections.profile-section-header >
                
                <!-- Section Title -->
                <x-texts.titles.profile-section-title-a titleLocalizeKey="words.speciality" />

                <!-- Section's Record Create Button -->
                <livewire:features.speciality.speciality 
                    view="add_speciality" 
                    :specialityable="$specialityable"
                    :wire:key="'speciality-c'" />
            
            </x-templates.sections.profile-section-header>
        </x-slot>

        <div class="grid grid-cols-3 gap-4 pt-4">
            @foreach ($specialityable->specialities as $item)
                <div class="flex">
                    <livewire:features.speciality.speciality 
                    view="delete_speciality" 
                    :specialityable="$specialityable"
                    :speciality="$item"
                    :wire:key="'speciality-d' . $item->id" />

                    <p class="pt-1">{{ $item->name }}</p>
                </div>
            @endforeach
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    
    </x-templates.sections.profile-section>
</div>
