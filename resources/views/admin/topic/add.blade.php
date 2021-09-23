<x-layouts.admin >

    <form action="{{ route('admin-topic-store') }}" method="post">
        @csrf
        
        <!-- Lan Tabs -->
        <x-tabs.tab-ka-en>
            <x-slot name="tabBodyKA">
                <x-forms.input-textlike type="text" name='topic_name_ka' idSelector="topic_name_ka_id" :labelTitle="__('words.name') . ' KA'" />
                
                <x-forms.trix-input-textarea name='topic_content_ka' idSelector="topic_description_en_id" :labelTitle="__('words.description') . ' KA'">
                    <x-slot name="trixField">
                        @trix(\App\Models\Event::class, 'content_ka', [ 'hideButtonIcons' => ['attach'], 'name' => 'topic_content_ka' ])
                    </x-slot>
                    
                </x-forms.trix-input-textarea>
            </x-slot>

            <x-slot name="tabBodyEN">
                <x-forms.input-textlike type="text" name='topic_name_en' idSelector="topic_name_en_id" :labelTitle="__('words.name') . ' EN'" />
                
                <x-forms.trix-input-textarea name='topic_content_en' idSelector="topic_description_en_id" :labelTitle="__('words.description') . ' EN'">
                    <x-slot name="trixField">
                        @trix(\App\Models\Event::class, 'content_en', [ 'hideButtonIcons' => ['attach'], 'name' => 'topic_content_en' ])
                    </x-slot>
                </x-forms.trix-input-textarea>
            </x-slot>

        </x-tabs.tab-ka-en>
        <!-- END Lan Tabs -->

        <div class="grid grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-4">
                <x-forms.input-textlike type="datetime-local" name='topic_start_time' idSelector="topic_start_time_id" :labelTitle="__('words.start_time')" />
                <x-forms.input-textlike type="datetime-local" name='topic_end_time' idSelector="topic_end_time_id" :labelTitle="__('words.end_time')" />
            </div>
            <div class="mt-5">
                <x-forms.input-toggle-checkbox id-selector="topic_active_id_selector" :label-title="__('words.active')" name="topic_active" />
            </div>
        </div>
        
        <button type="submit">save</button>
    </form>




</x-layouts.admin>