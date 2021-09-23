<div>
    <!-- Page Hood -->
    <x-templates.pages.parts.page-header-a :page-title="null"/>
    <!-- END Page Hood -->
    <div class="-mt-64 mx-auto p-4 pt-20 h-auto bg-white rounded-3xl 
                grid grid-cols-12 gap-4
                2xl:container">
        <!-- Page Left Side -->
        <div class="col-span-2">
            {{ $leftSide }}
        </div>
        <!-- END Page Left Side -->
        <!-- Page Main Section -->
        <div class="col-span-10">
            {{ $main }}
        </div>
        <!-- END Page Main Section -->

    </div>
</div>