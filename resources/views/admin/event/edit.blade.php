<x-layouts.admin >
    <!-- Image -->
    <div class="w-64">
        <livewire:features.file.file :fileable="$event" />
    </div>
    <!-- END Image -->
    <form id="event-edit-form" action="{{ route('admin-event-update', ['event' => $event->id]) }}" method="post">
        @csrf
        
        <!-- Lan Tabs -->
        <x-tabs.tab-ka-en>
            <x-slot name="tabBodyKA">
                <x-forms.input-textlike type="text" name='event_name_ka' :value="$event->translateOrNew('ka')->name" idSelector="event_name_ka_id" :labelTitle="__('words.name') . ' KA'" />
                
                <x-forms.trix-input-textarea name='content_ka' idSelector="event_description_en_id" :labelTitle="__('words.description') . ' KA'">
                    <x-slot name="trixField">   
                        {!! $event->trix('content', ['locale' => 'ka', 'id' => 'trix_event_id_ka', 'name' => 'event_content_ka']) !!}
                    </x-slot>
                    
                </x-forms.trix-input-textarea>
            </x-slot>

            <x-slot name="tabBodyEN">
                <x-forms.input-textlike type="text" name='event_name_en' :value="$event->translateOrNew('en')->name" idSelector="event_name_en_id" :labelTitle="__('words.name') . ' EN'" />
                
                <x-forms.trix-input-textarea name='content_en' idSelector="event_description_en_id" :labelTitle="__('words.description') . ' EN'">
                    <x-slot name="trixField">
                        {!! $event->trix('content', ['locale' => 'en', 'id' => 'trix_event_id_en', 'name' => 'event_content_en']) !!}
                    </x-slot>
                </x-forms.trix-input-textarea>
            </x-slot>

        </x-tabs.tab-ka-en>
        <!-- END Lan Tabs -->

        <div class="mb-20 grid grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4">
                <x-forms.input-textlike type="datetime-local" name='event_start_time' :value="$event->HTMLStartTime" idSelector="event_start_time_id" :labelTitle="__('words.start_time')" />
                <x-forms.input-textlike type="datetime-local" name='event_end_time' :value="$event->HTMLEndTime" idSelector="event_end_time_id" :labelTitle="__('words.end_time')" />
            </div>
            <div class="mt-5">
                <x-forms.input-toggle-checkbox id-selector="event_active_id_selector" :value="$event->active" :label-title="__('words.active')" name="event_active" />
            </div>
        </div>
        
        
    </form>

    <!-- Address -->
    <div>
        <x-templates.sections.profile-section>
            <x-slot name="sectionHeader">
                <x-templates.sections.profile-section-header>
                    <x-texts.titles.profile-section-title-b title-localize-key="words.address" />
                    <livewire:features.address.address view="add_address" :addressable="$event" />
                </x-templates.sections.profile-section-header>
                <livewire:features.address.address view="event_admin_address_section" :addressable="$event" />
            </x-slot>
            
            
        </x-templates.sections.profile-section>
    </div>
    <!-- END Address -->
    
    <!-- Topics -->
    <div>
        <x-templates.sections.profile-section>
            <x-slot name="sectionHeader">
                <x-templates.sections.profile-section-header>
                    <x-texts.titles.profile-section-title-b title-localize-key="words.topics" />
                    <livewire:features.topic.topic view="add_topic" :event="$event" />
                </x-templates.sections.profile-section-header>
                
            </x-slot>
            
            <livewire:features.topic.topic view="topic_admin_section" :event="$event" />
        </x-templates.sections.profile-section>
    </div>
    <!-- END Topics -->

    <x-buttons.html-sub-btn-a form-name="event-edit-form"/>
    

</x-layouts.admin>