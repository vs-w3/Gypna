<x-layouts.admin >

    <form action="{{ route('admin-event-store') }}" method="post">
        @csrf
        
        <!-- Lan Tabs -->
        <x-tabs.tab-ka-en>
            <x-slot name="tabBodyKA">
                <x-forms.input-textlike type="text" name='event_name_ka' idSelector="event_name_ka_id" :labelTitle="__('words.name') . ' KA'" />
                
                <x-forms.trix-input-textarea name='event_content_ka' idSelector="event_description_en_id" :labelTitle="__('words.description') . ' KA'">
                    <x-slot name="trixField">
                        @trix(\App\Models\Event::class, 'content_ka', [ 'hideButtonIcons' => ['attach'], 'name' => 'event_content_ka' ])
                    </x-slot>
                    
                </x-forms.trix-input-textarea>
            </x-slot>

            <x-slot name="tabBodyEN">
                <x-forms.input-textlike type="text" name='event_name_en' idSelector="event_name_en_id" :labelTitle="__('words.name') . ' EN'" />
                
                <x-forms.trix-input-textarea name='event_content_en' idSelector="event_description_en_id" :labelTitle="__('words.description') . ' EN'">
                    <x-slot name="trixField">
                        @trix(\App\Models\Event::class, 'content_en', [ 'hideButtonIcons' => ['attach'], 'name' => 'event_content_en' ])
                    </x-slot>
                </x-forms.trix-input-textarea>
            </x-slot>

        </x-tabs.tab-ka-en>
        <!-- END Lan Tabs -->

        <div class="grid grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4">
                <x-forms.input-textlike type="datetime-local" name='event_start_time' idSelector="event_start_time_id" :labelTitle="__('words.start_time')" />
                <x-forms.input-textlike type="datetime-local" name='event_end_time' idSelector="event_end_time_id" :labelTitle="__('words.end_time')" />
            </div>
            <div class="mt-5">
                <x-forms.input-toggle-checkbox id-selector="event_active_id_selector" :label-title="__('words.active')" name="event_active" />
            </div>
        </div>
        
        <button type="submit">save</button>
    </form>




</x-layouts.admin>