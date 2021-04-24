<x-layouts.main>

    <div class="gypna-main-sec-1">
        <section class="lg:container lg:mx-auto lg:h-screen pt-20 grid grid-cols-12 gap-4">

            <section class="bg-green-50 col-span-4">
                left
            </section>
            <section class="col-span-8">
                <!--
                1 - name +
                2 - lastname +
                3 - birthdate
                4 - id number
                5 - working place
                6 - working position
                7 - home address with postal code
                8 - work address with postal code
                9 - phone
                10 - fax
                11 - email
                12 - filling date
                -->
                <div class="flex">
                    <x-parts.input-text-label id="fname" labelTitle="First Name" name="fname" placeholder="First Name" />
                    <x-parts.input-text-label id="lname" labelTitle="Last Name" name="lname" placeholder="Last Name" />
                </div>
                <div class="flex">
                    <x-parts.input-text-label id="fname" labelTitle="First Name" name="fname" placeholder="First Name" />
                    <x-parts.input-text-label id="pnumber" labelTitle="Private Number" name="pnumber" placeholder="Private Number" />
                </div>
            </section>

        </section>
    </div>
</x-layouts.main>