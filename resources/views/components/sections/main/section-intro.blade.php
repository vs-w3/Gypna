<section class="w-full h-screen gypna-main-sec-1 flex">
    <div class="w-1/2 flex justify-end">
        <div class="w-8/12 mt-44">
            <h1 class="font-sans text-5xl my-10 mt-20">{{ $intro->title }}</h1>
            <p class="font-sans text-2xl my-10">
                {{ $intro->body }}
            </p>
            <div class="mt-28">
                <button class="gypna-v2-bg-dark-green py-2 px-10 text-white text-xl rounded-bl-2xl">{{ __('words.become_member')}}</button>
                <button class="gypna-v2-bg-dark-green py-2 px-10 text-white text-xl rounded-tr-2xl">{{ __('words.become_partner')}}</button>
            </div>
        </div>
    </div>

    <div class="gypna-main-sec-1-img-wraper pb-10 w-1/2 h-10/12 flex justify-end">
        <div class="relative flex justify-end">
            <img id="sec-1-img" src="assets/img/sec-1-img-2.png" class="h-full " alt="sasasasas">
            <img src="assets/design/main-banner-border.png" class="h-full absolute top-0 right-0"  alt="">
        </div>
    </div>

</section>