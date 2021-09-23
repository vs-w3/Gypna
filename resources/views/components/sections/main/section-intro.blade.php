<section class="w-full pb-10 gypna-main-sec-1 sm:flex xl:h-auto">
    <!-- Banner -->
    <div class="
        gypna-main-sec-1-img-wraper pb-5 w-full flex justify-end
        sm:w-1/2 h-4/12 sm:order-last
        xl:pb-10 xl:w-1/2  ">
        <div class="relative flex justify-end">
            <img id="sec-1-img" src="assets/img/sec-1-img-2.png" class="h-auto" alt="sasasasas">
            <img src="assets/design/main-banner-border.png" class="h-full absolute top-0 right-0"  alt="">
        </div>
    </div>

    <!-- Text -->
    <div class="
        mx-auto w-full justify-end
        sm:w-1/2 flex sm:order-first">
        <div class="px-10 mt-18
            xl:p-0 xl:w-8/12 xl:mt-44">
            <h1 class="
                text-xl font-semibold my-5
                md:my-10 
                xl:text-5xl xl:mt-20">
                {{ $intro->title }}
            </h1>
            <p class="
                font-sans text-xl my-10
                xl:text-2xl">
                {{ $intro->body }}
            </p>
            <div class="
                mt-20 flex justify-center
                lg:mt-28 mb-10">
                <button class="gypna-v2-bg-dark-green py-2 px-3 text-sm mr-1 sm:py-2 sm:px-2 md:px-3 lg:text-lg xl:px-10 xl:text-xl text-white rounded-bl-2xl">{{ __('words.become_member')}}</button>
                <button class="gypna-v2-bg-dark-green py-2 px-3 text-sm ml-1 sm:py-2 sm:px-2 md:px-3 lg:text-lg xl:px-10 xl:text-xl text-white rounded-tr-2xl">{{ __('words.become_partner')}}</button>
            </div>
        </div>
    </div>

</section>