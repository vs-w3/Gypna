<div>
    <x-modals.modal-xl modalTitle="words.add" >

    <!-- Modal Initialize Button -->
    <x-slot name="initializeButton">
        <x-buttons.lw-init-btn-a
        btn-title="words.add"
        btn-tooltip="words.add"
        :btn-icon="config('icons.fa.plus')" /> 
    </x-slot>
    <!-- END Modal Initialize Button -->
    
    <!-- Body -->
    <x-slot name="modalBody">
        
        <!-- Lan Tabs -->
        <x-tabs.tab-ka-en>
            <x-slot name="tabBodyKA">
                <x-forms.lw-textlike id-selector="topic_name_ka" :label-title="__('words.name') . ' KA'" type="text" bind-property="record.name.ka" />
                <x-forms.trix-input-textarea name='topic_content_ka' idSelector="topic_description_en_id" :labelTitle="__('words.description') . ' KA'">
                    <x-slot name="trixField">
                        @trix(\App\Models\Event::class, 'content_ka', [ 'hideButtonIcons' => ['attach'], 'name' => 'topic_content_ka', 'bind' => true ])
                    </x-slot>
                    
                </x-forms.trix-input-textarea>

            </x-slot>

            <x-slot name="tabBodyEN">
                <x-forms.lw-textlike id-selector="topic_name_en" :label-title="__('words.name') . ' EN'" type="text" bind-property="record.name.en" />
                
                <x-forms.trix-input-textarea name='content_en' idSelector="event_description_en_id" :labelTitle="__('words.description') . ' EN'">
                    <x-slot name="trixField">
                        aaa
                    </x-slot>
                </x-forms.trix-input-textarea>
            </x-slot>

        </x-tabs.tab-ka-en>
        <!-- END Lan Tabs -->

        <div class="mb-20 grid grid-cols-2 gap-4">
            <div class="grid grid-cols-1 gap-4">
                <x-forms.lw-textlike id-selector="topic_start_id_selector" :label-title="__('words.start_time')" type="datetime-local" bind-property="record.topic_start" />
                <x-forms.lw-textlike id-selector="topic_end_id_selector" :label-title="__('words.end_time')" type="datetime-local" bind-property="record.topic_end" />
                
            </div>
            <div class="mt-5">
                <x-forms.lw-toggle-checkbox id-selector="pablic_active_id_selector" bind-property="record.active" :label-title="__('words.active')" />
            </div>
        </div>




        <div>
            <p class="flex justify-between"><span>Topic Name KA</span><input type="text" wire:model="record.name.ka"></p>
            <p class="flex justify-between"><span>Topic Description KA</span><input type="text" wire:model="record.topic_description_ka"></p>
            <p class="flex justify-between"><span>Topic Name EN</span><input type="text" wire:model="record.name.en"></p>
            <p class="flex justify-between"><span>Topic Start</span><input type="text" wire:model="record.topic_start"></p>
            <p class="flex justify-between"><span>Topic End</span><input type="text" wire:model="record.topic_end"></p>
            <p class="flex justify-between"><span>Topic Active</span><input type="text" wire:model="record.active"></p>

        </div>



    </x-slot>
    <!-- END Body -->
    <!-- Submit BUtton -->
    <x-slot name="modalFooter">
        <x-buttons.sub-btn-add-a />
    </x-slot>
    <!-- END Submit BUtton -->
    </x-modals.modal-xl>
</div>