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
            <div class="grid grid-cols-2 gap-4">
                @foreach ($unOwnedSpecialities as $index => $speciality)
                <div class="w-1/2">
                    <x-forms.lw-checkbox-a 
                        :id-Selector="'speciality_label_id_' . $speciality->id" 
                        :checkbox-title="$speciality->name" 
                        :index="$speciality->id"/>
                </div>
                @endforeach
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