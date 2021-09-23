<div class="mt-5 gap-4
                lg:grid lg:grid-cols-2
                2xl:grid-cols-4">
                
    {{-- @foreach ($addressable->addresses as $address)
    <div class="mb-5 p-5 pt-1 border rounded-lg border-gray-200">
        <!-- Action -->
        <div class="mb-3 flex justify-end">
            
            <!-- Edit -->
            <livewire:features.address.address 
                view="edit_address" 
                :addressable="$addressable"
                :address="$address"
                :wire:key="'address-u' . $address->id" />
            <!-- End Edit -->


            <!-- Delete -->
            <livewire:features.address.address 
                view="delete_address" 
                :addressable="$addressable"
                :address="$address"
                :wire:key="'address-d' . $address->id" /> 
            <!-- End Delete -->

        </div>
        <!-- Card -->
            <x-cards.address.address-card-b-0 :item="$address" />
        <!-- End Card -->
    </div>
    @endforeach --}}
</div>