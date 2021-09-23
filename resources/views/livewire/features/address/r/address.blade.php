<div id="lw_features_address_r_address">
    <x-templates.sections.profile-section >
        <x-slot name="sectionHeader">
            <!-- Profile Section Header -->
            <x-templates.sections.profile-section-header >
                
                <!-- Section Title -->
                <x-texts.titles.profile-section-title-a titleLocalizeKey="words.address" />

                <!-- Section's Record Create Button -->
                <livewire:features.address.address 
                    view="add_address" 
                    :addressable="$addressable"
                    :wire:key="'address-c'" />
            
            </x-templates.sections.profile-section-header>
        </x-slot>
        <div class="py-5 flex">
            <!-- Current Addresses -->
            <div class="w-full mr-2">
                <x-texts.titles.profile-section-title-b titleLocalizeKey="words.address_current" />
                @foreach ($actualAddresses as $item)
                <div class="mb-5 p-5 pt-1 border rounded-lg border-gray-200">
                    <!-- Action -->
                    <div class="mb-3 flex justify-end">
                        
                        <!-- Edit -->
                        <livewire:features.address.address 
                            view="edit_address" 
                            :addressable="$addressable"
                            :address="$item"
                            :wire:key="'address-u' . $item->id" />
                        <!-- End Edit -->
    

                        <!-- Delete -->
                        <livewire:features.address.address 
                            view="delete_address" 
                            :addressable="$addressable"
                            :address="$item"
                            :wire:key="'address-d' . $item->id" /> 
                        <!-- End Delete -->
    
                    </div>
                    <!-- Card -->
                        <x-cards.address.address-card-b-0 :item="$item" />
                    <!-- End Card -->
                </div>
                @endforeach
            </div>{{--
            <!-- Legal Addresses -->
            <div class="w-full ml-2">
                <x-texts.titles.profile-section-title-b titleLocalizeKey="words.address_legal" />
                @foreach ($legalAddresses as $item)
                <div class="mb-5 p-5 pt-1 border rounded-lg border-gray-200">
                    <!-- Action -->
                    <div class="mb-3 flex justify-end">
                        <!-- Edit -->
                        <livewire:features.address.address 
                            view="edit_address" 
                            :addressable="$addressable"
                            :address="$item"
                            :wire:key="'address-u' . $item->id" />
                        <!-- End Edit -->
    

                        <!-- Delete -->
                        <livewire:features.address.address 
                            view="delete_address" 
                            :addressable="$addressable"
                            :address="$item"
                            :wire:key="'address-d' . $item->id" /> 
                        <!-- End Delete -->
                    </div>
                    
                    <!-- Card -->
                    <x-cards.address.address-card-b-0 :item="$item" />
                    <!-- End Card -->
                </div>
                @endforeach
            </div>--}}
        </div>
    </x-templates.sections.profile-section>
</div>





