<div>
    <x-modals.modal-xl modalTitle="words.edit">

        <!-- Modal Initialize Button -->
        <x-slot name="initializeButton">
            <x-buttons.lw-init-btn-b btn-tooltip="words.edit" :btn-icon="config('icons.fa.edit')" /> 
        </x-slot>
        <!-- END Modal Initialize Button -->
    
        <!-- Body -->
        <x-slot name="modalBody">
            <div>
                <div class="flex justify-end w-full mb-5">
                    <!-- Public or Private -->
                    <div class="w-1/2 mr-5 flex justify-items-end">
                        <x-forms.lw-toggle-checkbox 
                        id-selector="public_checkbox_label_id_{{ $record['id'] }}"
                        bind-property='record.public'
                        :label-title="__('words.everybody_can_see')"/>
                    </div>
                </div>

                <div class="flex w-full mb-5">
                    <!-- Region -->
                    <div class="w-1/2 mr-5">
                        <x-forms.lw-select
                            id-selector="region_select_label_id_{{ $record['id'] }}"
                            bind-property='record.region_id'
                            :label-title="__('words.region')"
                            :data="$mdata['regions']"/>
                    </div>
                    <!-- City -->
                    <div class="w-1/2 ml-5">
                        <x-forms.lw-select
                            id-selector="city_select_label_id_{{ $record['id'] }}"
                            bind-property='record.city_id'
                            :label-title="__('words.city')"
                            :data="$mdata['cities']"/>
                    </div>  
                </div>
                <div class="flex w-full mb-5">
                    <!-- Body -->
                    <div class="w-1/2 mr-5">
                        <x-forms.lw-textlike
                            id-selector="body_label_id_{{ $record['id'] }}"
                            bind-property='record.body'
                            :label-title="__('words.address')"
                            type="text"/>
                    </div>
                    <div class="w-1/2 ml-5 flex">
                        <!-- Postal Code -->
                        <div class="w-1/2">
                            <x-forms.lw-textlike
                                id-selector="postal_code_label_id_{{ $record['id'] }}"
                                bind-property='record.postal_code'
                                :label-title="__('words.postal_code')"
                                type="text"/>
                        </div>
                        <div class="w-1/2 ml-5">
                            <x-forms.lw-select
                                id-selector="region_select_address_type_{{ $record['id'] }}"
                                bind-property='record.address_type_id'
                                :label-title="__('words.address_type')"
                                :data="$mdata['address_types']"/>
                        </div>
                    </div>
                    
                </div>
            </div>
        </x-slot>
        <!-- END Body -->

        <!-- Submit BUtton -->
        <x-slot name="modalFooter">
            <x-buttons.sub-btn-edit-a />
        </x-slot>
        <!-- END Submit BUtton -->
    </x-modals.modal-xl>
</div>