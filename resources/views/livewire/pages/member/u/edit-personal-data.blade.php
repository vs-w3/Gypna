<div>
    
    <x-modals.modal-xl modalTitle="words.edit">
        <!-- Modal Initialize Button -->
        <x-slot name="initializeButton">
            <x-buttons.lw-init-btn-a
            btn-title="words.edit"
            btn-tooltip="words.edit"
            :btn-icon="config('icons.fa.edit')" /> 
        </x-slot>
        <!-- END Modal Initialize Button -->
        
        <!-- Body -->
        <x-slot name="modalBody">
            <div class="">
                <div>

                </div>
                <!-- Tab First Name & Last Name -->
                <x-tabs.tab-ka-en>
                    <x-slot name="tabBodyKA">
                        <div class="grid grid-cols-2 gap-4">
                            <x-forms.lw-textlike 
                                id-selector="personal_data_first_name_KA"
                                :label-title="__('words.first_name') . ' KA'"
                                type="text"
                                bind-property="record.first_name_ka" />
                            <x-forms.lw-textlike 
                                id-selector="personal_data_last_name_KA"
                                :label-title="__('words.last_name') . ' KA'"
                                type="text"
                                bind-property="record.last_name_ka" />
                        </div>
                        
                    </x-slot>

                    <x-slot name="tabBodyEN">
                        <div class="grid grid-cols-2 gap-4">
                            <x-forms.lw-textlike 
                                id-selector="personal_data_first_name_EN"
                                :label-title="__('words.first_name') . ' EN'"
                                type="text"
                                bind-property="record.first_name_en" />
                            <x-forms.lw-textlike 
                                id-selector="personal_data_last_name_EN"
                                :label-title="__('words.last_name') . ' EN'"
                                type="text"
                                bind-property="record.last_name_en" />
                            </div>
                    </x-slot>
                </x-tabs.tab-ka-en>
                <!-- ID Number -->
                <div class="mb-5 grid grid-cols-2 gap-4">
                        <x-forms.lw-textlike 
                            id-selector="personal_data_ID_number"
                            :label-title="__('words.personal_id_number')"
                            type="text"
                            bind-property="record.id_number" />

                        <x-forms.lw-toggle-checkbox
                            id-selector="personal_data_ID_number_visible"
                            :label-title="__('words.personal_id_number') . ': ' . __('words.everybody_can_see')"
                            bind-property="record.public_id_number" />  
                </div>
                <!-- END ID Number -->
                <!-- Birth Date -->
                <div class="mb-5 grid grid-cols-2 gap-4">
                    <x-forms.lw-date 
                        id-selector="personal_data_birth_date"
                        :label-title="__('words.birth_date')"
                        bind-property="record.birth_date" />

                    <x-forms.lw-toggle-checkbox
                        id-selector="personal_data_ID_numberbirth_date_visible"
                        :label-title="__('words.birth_date') . ': ' . __('words.everybody_can_see')"
                        bind-property="record.public_birth_date" />  
                </div>
                <!-- END Birth Date -->
                <div class="mb-5 grid grid-cols-2 gap-4">
                    <x-forms.lw-textlike 
                        id-selector="personal_data_email"
                        :label-title="__('words.email')"
                        type="text"
                        bind-property="record.email" />
                </div>

            </div>
            <!-- -------------------------------- -->
            {{--
            <div class="bg-red-50 py-10">
                <p><input type="text" wire:model="record.first_name_ka"><span>First Name KA</span></p>
                <p><input type="text" wire:model="record.first_name_en"><span>First Name EN</span></p>
                <p><input type="text" wire:model="record.last_name_ka"><span>Last Name KA</span></p>
                <p><input type="text" wire:model="record.last_name_en"><span>Last Name EN</span></p>
                <p><input type="text" wire:model="record.id_number"><span>ID</span></p>
                <p><input type="text" wire:model="record.public_id_number"><span>ID Public</span></p>
                <p><input type="text" wire:model="record.birth_date"><span>Birth Date</span></p>
                <p><input type="text" wire:model="record.public_birth_date"><span>BD Public</span></p>
                <p><input type="text" wire:model="record.img"><span>IMG</span></p>
                <p><input type="text" wire:model="record.email"><span>Email</span></p>
                
            </div>--}}
        </x-slot>
        <!-- END Body -->

        <!-- Submit BUtton -->
        <x-slot name="modalFooter">
            <x-buttons.sub-btn-edit-a />
        </x-slot>
        <!-- END Submit BUtton -->
    </x-modals.modal-xl>
</div>