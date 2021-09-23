<div id="lw_pages_member_personal-data">
    <x-templates.sections.profile-section >
        <x-slot name="sectionHeader">
            <x-templates.sections.profile-section-header >

                <!-- Section Title -->
                <x-texts.titles.profile-section-title-a titleLocalizeKey="" />

                <!-- Section's Record Edit Button -->
                <livewire:pages.member.personal-data
                    view="edit_personal_data"
                    :user="$user">

            </x-templates.sections.profile-section-header>
        </x-slot>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
                <livewire:features.file.file :fileable="$user" />
                
            </div>
            <div class="col-span-8">
                <x-texts.titles.profile-section-title-b :title-localize-key="$record['first_name_' . app()->getlocale()] . ' ' .  $record['last_name_' . app()->getlocale()]" wire:te />
                <x-texts.paragraphs.section-label-title-a :label="__('words.birth_date')" :data="$record['birth_date']" /> 
                <x-texts.paragraphs.section-label-title-a :label="__('words.email')" :data="$record['email']" />
                <x-texts.paragraphs.section-label-title-a :label="__('words.personal_id_number')" :data="$record['id_number']" /> 
            </div>
            
        </div>
        
    </x-templates.sections.profile-section>  
</div>
