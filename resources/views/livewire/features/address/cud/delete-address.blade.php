<div>
    <x-modals.modal-xl modalTitle="words.delete" >

        <!-- Modal Initialize Button -->
        <x-slot name="initializeButton">
            <x-buttons.lw-init-btn-b btn-tooltip="words.delete" :btn-icon="config('icons.fa.delete')" /> 
        </x-slot>
        <!-- END Modal Initialize Button -->

        <!-- Body -->
        <x-slot name="modalBody">
            <div>
                <div class="flex gap-2">
                    <div class="w-1/2">
                        <x-texts.paragraphs.section-label-title-a :label="__('words.region')" :data="$address->region->name" />
                    </div>
                    <div class="w-1/2">
                        <x-texts.paragraphs.section-label-title-a :label="__('words.city')" :data="$address->city->name" />
                    </div>
                </div>
                <div class="flex gap-2">
                    <div class="w-1/2">
                        <x-texts.paragraphs.section-label-title-a :label="__('words.address')" :data="$address->body" />
                    </div>
                    <div class="flex w-1/2">
                        <x-texts.paragraphs.section-label-title-a :label="__('words.postal_code')" :data="$address->postal_code" />
                    </div>
                </div>          
                <x-texts.paragraphs.section-label-title-a :label="__('words.address_type')" :data="$address->address_type->name" />
            </div>
        </x-slot>
        <!-- END Body -->

        <!-- Submit BUtton -->
        <x-slot name="modalFooter">
            <x-buttons.sub-btn-cancel-a />
            <x-buttons.sub-btn-delete-a />
        </x-slot>
        <!-- END Submit BUtton -->
    </x-modals.modal-xl>
</div>