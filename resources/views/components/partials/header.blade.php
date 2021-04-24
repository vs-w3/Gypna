<header class="bg-gray-50 bg-opacity-50 py-2 px-5 h-20 fixed block w-full z-20">
    <div class="lg:container lg:mx-auto flex">
        <div class="bg-green-400 w-1/12 h-16">
            <a href="/" rel="noopener noreferrer">logo</a>
        </div>
        <nav class="w-11/12">
            <!-- Nav top line: Membership; Partnership; lan -->
            <div class="flex justify-end space-x-10 h-8">
                <x-parts.mpbutton url="{{ route('getMembership', app()->getLocale()) }}" icon="fas fa-users" title="Memebership" />
                <x-parts.mpbutton url="{{ route('getPartnership', app()->getLocale()) }}" icon="far fa-handshake" title="Partnership" />

                <x-parts.localize-drop-down />
            </div>
            <ul class="mt-2 flex justify-end space-x-4 h-10">
                <li>About Us</li>
                <li>Projects</li>
                <li>Media</li>
                <li>Partners</li>
                <li>Contacts</li>
            </ul>
        </nav>
    </div>
</header>