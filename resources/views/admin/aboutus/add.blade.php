<x-layouts.admin >
    <form action="{{ url('admin/add/aboutus') }}" method="post">
    @csrf
    
    <div class="w-full">
        <div class="w-full border rounded-md" x-data="{ tab: 'ka' }">
            <div class="flex px-5 py-3 border-b bg-gray-50  ">
                <p :class="{ 'bg-gray-300': tab === 'ka'}" class="px-5 border cursor-pointer" @click="tab = 'ka'">KA</p>
                <p :class="{ 'bg-gray-300': tab === 'en'}" class="px-5 border cursor-pointer" @click="tab = 'en'">EN</p>
            </div>



            <div x-show="tab == 'ka'">
                <div class="m-3">
                    <label for="title_ka" class="block mb-2 font-semibold text-lg text-nt-3">Title KA</label>
                    <input class="w-full block rounded border-gray-200 text-nt-0" id="title_ka" type="text" name="title_ka"  value="{{ old('title_ka') }}" placeholder="სათაური ქართულად">
                    @error('title_ka')
                        <div class="w-full mt-3 px-5 py-3 bg-nt-11 rounded text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-3">
                    <label for="body_ka" class="block mb-2 font-semibold text-lg text-nt-3">Text KA</label>
                    <textarea class="w-full block rounded border-gray-200 text-nt-0" id="body_ka" name="body_ka">{{ old('body_ka') }}</textarea>
                    @error('body_ka')
                        <div class="w-full mt-3 px-5 py-3 bg-nt-11 rounded text-white">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div  x-show="tab == 'en'">
                <div class="m-3">
                    <label for="title_en" class="block mb-2 font-semibold text-lg text-nt-3">Title KA</label>
                    <input class="w-full block rounded border-gray-200 text-nt-0" id="title_en" type="text" name="title_en"  value="{{ old('title_en') }}" placeholder="სათაური ინგლისურად">
                    @error('title_ka')
                        <div class="w-full mt-3 px-5 py-3 bg-nt-11 rounded text-white">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-3">
                    <label for="body_en" class="block mb-2 font-semibold text-lg text-nt-3">Text EN</label>
                    <textarea class="w-full block rounded border-gray-200 text-nt-0" id="body_en" name="body_en">{{ old('body_en') }}</textarea>
                    @error('body_en')
                        <div class="w-full mt-3 px-5 py-3 bg-nt-11 rounded text-white">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
        </div>

        

        <button type="submit" class="p-3 bg-nt-3 text-nt-4 rounded-md mt-10">შენახვა</button>
    </div>
    </form>

</x-layouts.admin>