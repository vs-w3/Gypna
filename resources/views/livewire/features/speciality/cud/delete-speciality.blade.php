<div>
    <x-modals.modal-xl modalTitle="words.delete" >

        <!-- Modal Initialize Button -->
        <x-slot name="initializeButton">
            <x-buttons.lw-init-btn-b
            btn-title="words.delete"
            btn-tooltip="words.delete"
            :btn-icon="config('icons.fa.delete')" /> 
        </x-slot>
        <!-- END Modal Initialize Button -->
        
        <!-- Body -->
        <x-slot name="modalBody">
            <div>
                <x-texts.paragraphs.section-label-title-a :label="__('words.delete')" :data="$speciality->name" />
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