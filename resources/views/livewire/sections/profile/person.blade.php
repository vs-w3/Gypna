<div id="speciality" class="mb-20 pb-10 border-b border-gray-200">

    <div class="py-2 border-b border-gray-50 flex justify-between text-sm align-middle relative"
    x-data="{ show: false }">
        <!-- Profile Section Header -->
        <h2 class="mt-3 font-bold text-base">{{ $title }}</h2>

        <!-- Profile Section Edit Button -->
        <x-partials.profile.section-action-button  action="Edit" />

        <!-- Profile Section Modal -->
        <div class="w-full h-auto p-10 pt-5 absolute top-0 right-0 border rounded-lg border-gray-100 bg-white shadow-xl" 
            x-show.transition=" show "
            @click.away=" show = false ">
            <!-- Profile Section Modal Header -->
            <x-partials.profile.section-modal-header title="User Data" />
            <form wire:submit.prevent="updateProfile" method="post">
                <!-- Profile Section Modal Body -->
                <div class="flex">
                    
                    <div class="w-1/2 mr-10">
                        <x-.partials.form.profile-input-text type="text" bind="data.name" placeholder="Name"/>
                        <x-.partials.form.profile-input-text type="text" bind="data.birth_date" placeholder="Birth Date"/>
                        <x-.partials.form.profile-input-text type="email" bind="data.email" placeholder="Email"/>
                        
                    </div>
                    <div class="w-1/2">
                        <x-.partials.form.profile-input-text type="text" bind="data.lastname" placeholder="Last Name"/>
                        <x-.partials.form.profile-input-text type="text" bind="data.id_number" placeholder="ID Number"/>
                    </div>

                    


                    
                </div>
                <!-- Profile Section Modal Footer -->
                <x-partials.profile.section-modal-footer />
            </form>
        </div>

    
    
    </div>

    <div class="py-10 flex">
        <div class="w-full flex">
            <div class="w-44 mr-10">
                img
            </div>
            <div class="w-full">
                <div class="mb-3 text-2xl flex">
                    <p class="pr-5">{{ $data['name'] }}</p>
                    <p>{{ $data['lastname'] }}</p>
                </div>
                <div class="flex">
                    <div class="w-1/2">
                        <x-partials.profile.personal.data-unit label="Birth Date" data="{{ $data['birth_date'] }}" />
                        <x-partials.profile.personal.data-unit label="Email" data="{{ $data['email'] }}" />
                        <x-partials.profile.personal.data-unit label="Actual Address" data="Tbilisi. vazisubani" />
                    </div>
                    <div class="w-1/2">
                        <x-partials.profile.personal.data-unit label="ID Number" data="{{ $data['id_number'] }}" />
                        <x-partials.profile.personal.data-unit label="Tell" data="595 433 566" />
                        <x-partials.profile.personal.data-unit label="Legal Address" data="Tbilisi. vazisubani" />
                    </div>
                </div>

            </div>
        </div>

    </div>



</div>
