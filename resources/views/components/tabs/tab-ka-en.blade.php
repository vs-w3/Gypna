<div class="w-full my-5"
    x-data="{ localizeTab : 'ka' }">
    <!-- Tabs -->
    <div class="pl-5">
        <button type="button" class="px-5 py-1 border rounded-t-sm border-b-0 border-g-green-500" :class="{'bg-g-green-500 text-white': localizeTab === 'ka'}"
            @click=" localizeTab = 'ka' ">KA</button>

        <button type="button" class="px-5 py-1 border rounded-t-sm border-b-0 border-g-green-500" :class="{'bg-g-green-500 text-white': localizeTab === 'en'}"
            @click=" localizeTab = 'en' ">EN</button>
    </div>
    <!-- Tab Body -->
    <div class="p-5 border border-gray-200 rounded-sm">
        <!-- KA -->
        <div
         x-show="localizeTab === 'ka'">
            {{ $tabBodyKA }}
        </div>
        <!-- EN --> 
        <div
        x-show="localizeTab === 'en'">
            {{ $tabBodyEN }}
        </div>
    </div>
    <!-- END Tab Body -->

</div>