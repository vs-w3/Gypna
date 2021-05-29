<div id="speciality" class="mb-20 pb-10 border-b border-gray-200">
    <div class="py-2 border-b border-gray-50 flex justify-between text-sm align-middle relative"
        x-data="{ show: false }">
        <!-- Profile Section Header -->
        <h2 class="mt-3 font-bold text-base">{{ $title }}</h2>

        <!-- Profile Section Add Button -->
        <x-partials.profile.section-action-button event="getSpecialities" action="Add" />

        <!-- Profile Section Modal -->
        <div class="w-full h-auto p-10 pt-5 absolute top-0 right-0 border rounded-lg border-gray-100 bg-white shadow-xl" 
            x-show.transition=" show "
            @click.away=" show = false ">

            <!-- Profile Section Modal Header -->
            <x-partials.profile.section-modal-header title="specialities" />

            <form wire:submit.prevent="addUserSpeciality" method="post">
                <!-- Profile Section Modal Body -->
                <div class="flex">
                    
                    @if ($specialities)
                        @foreach ($specialities as $speciality)
                        <div  class="mr-10 my-5">
                            <input class="rouded-sm" type="checkbox" id="speciality_{{ $speciality->id }}" wire:model="userSpeciality" value="{{ $speciality->id }}">
                            <label class="ml-5" for="speciality_{{ $speciality->id }}">
                                {{ $speciality->name }}
                            </label>
                        </div>
                        @endforeach
                    @endif
                </div>
                <!-- Profile Section Modal Footer -->
                <x-partials.profile.section-modal-footer />
            </form>
        </div>

        
        
    </div>
    
    <div class="flex">
        <!-- Profile Section Speciality Body -->
        @foreach (auth()->user()->specialities as $speciality)
        <div  class="mr-10 my-5 w-1/3 flex">
            <button wire:click="$emit('deleteUserSpeciality', {{ $speciality->pivot->id }})">
                <i class="far fa-trash-alt"></i>
            </button>
            <p class="ml-5">{{ $speciality->name }}</p> 
        </div>
        @endforeach

    </div>
</div>
