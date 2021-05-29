<x-layouts.main>
    <x-partials.common.page-hood :page-title="__('auth.authenticate')"/>
    <div class="container py-5 mx-auto -mt-64 h-screen bg-white rounded-3xl flex">
        <x-dynamic-component :component="$navComponent" />
        <x-dynamic-component :component="$mainComponent" />
        
    </div>
</x-layouts.main>