<x-layouts.admin >
    <form action="{{ url('admin/edit/speciality/' . $speciality->id) }}" method="post">
    @csrf
    
    <div class="w-full">
        <div class="w-full border rounded-md" x-data="{ tab: 'ka' }">
            <div class="flex px-5 py-3 border-b bg-gray-50  ">
                <p :class="{ 'bg-gray-300': tab === 'ka'}" class="px-5 border cursor-pointer" @click="tab = 'ka'">KA</p>
                <p :class="{ 'bg-gray-300': tab === 'en'}" class="px-5 border cursor-pointer" @click="tab = 'en'">EN</p>
            </div>


            <!-- Tab KA -->
            <div x-show="tab == 'ka'">
                <div class="m-3">
                    <label for="name_ka" class="block mb-2 font-semibold text-lg text-nt-3">Name KA</label>
                    <input class="w-full block rounded border-gray-200 text-nt-0" id="name_ka" type="text" name="name_ka" value="{{ $speciality->getTranslationOrNew('ka')->name }}" placeholder="სახელი ქართულად">
                    @error('name_ka')
                    <div class="w-full mt-3 px-5 py-3 bg-nt-11 rounded text-white">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <!-- Tab EN -->
            <div  x-show="tab == 'en'">
                <div class="m-3">
                    <label for="name_en" class="block mb-2 font-semibold text-lg text-nt-3">Name EN</label>
                    <input class="w-full block rounded border-gray-200 text-nt-0" id="name_en" type="text" name="name_en" value="{{ $speciality->getTranslationOrNew('en')->name }}" placeholder="სახელი ინგლისურად">
                    @error('name_en')
                        <div class="w-full mt-3 px-5 py-3 bg-nt-11 rounded text-white">{{ $message }}</div> 
                    @enderror
                </div>
            </div>
            
        </div>

        

        <button type="submit" class="p-3 bg-nt-3 text-nt-4 rounded-md mt-10">შენახვა</button>
    </div>
    </form>

</x-layouts.admin>