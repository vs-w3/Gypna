<!--
@param $modalTitle        // Title For modal
-->
<div class="inline-block"
    x-data="{ showModal: false, toolTip: false }">

    
    <!-- Initialize Button -->
    <div>
        {{ $initializeButton }}
    </div>
    <!-- End Initialize Button -->

    <!-- Modal -->
    <div class="fixed w-full top-0 z-50 bg-white overflow-auto
        lg:px-10 lg:py-5 lg:left-1/4 lg:w-2/4 lg:inset-y-24 lg:border lg:border-gray-300 lg:rounded-lg lg:shadow-lg"
        x-show="showModal"
        @click.away="showModal = false">
        
        <!--------------------------------------------------------------------------------->
        <!-- Modal Header -->
        <header class="flex justify-between border-b border-gray-300 pb-2 text-base @if ( app()->getlocale() == 'ka') font-alk @else font-inter @endif">
            <h3>{{ __($modalTitle) }}</h3>
            <button class="text-gray-500"
                    @click="showModal = false">
                <i class="fas fa-times"></i>
            </button>
        </header>
        <!-- End Modal Header -->
        
        <!--------------------------------------------------------------------------------->
        <!-- Modal Body -->
        <div class="py-5 w-full">
            {{--<form wire:submit.prevent="" method="post">--}}
            <!-- Here -->
            {{ $modalBody }}
            <!-- Here -->
            {{--</form>--}}
        </div>
        <!-- End Modal Body -->
        
        <!--------------------------------------------------------------------------------->
        <!-- Modal Footer -->
        <footer class="flex gap-2 justify-end mt-5 mb-3">
            {{ $modalFooter }}
        </footer>
        <!-- End Modal Footer -->
        
    </div>
    <!-- End Modal -->
    
</div>
