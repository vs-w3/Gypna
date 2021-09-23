<div>
    <!-- Page Hood -->
    <x-templates.pages.parts.page-header-a :page-title="__('auth.authenticate')"/>
    <!-- END Page Hood -->
    <div class="-mt-64 mx-auto p-4 h-auto bg-white rounded-3xl 
                grid grid-cols-12 gap-4
                2xl:container">
        <!-- Page Left Side -->
        <div class="col-span-3">
            {{ $leftSide }}
        </div>
        <!-- END Page Left Side -->
        <!-- Page Main Section -->
        <div class="col-span-6">
            {{ $main }}
        </div>
        <!-- END Page Main Section -->
        <!-- Page Right Side -->
        <div class="col-span-3">
            {{ $rightSide }}
        </div>
        <!-- END Page Right Side -->
    </div>
</div>