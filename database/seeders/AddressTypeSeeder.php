<?php

namespace Database\Seeders;

use App\Models\AddressType;
use Illuminate\Database\Seeder;

class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'identifier' => 'current',
                'ka' => 'მიმდინარე',
                'en' => 'current',
            ],
            [
                'identifier' => 'legal',
                'ka' => 'იურიდიული',
                'en' => 'legal',
            ]
        ];
        foreach($data as $item) {
            $address_type = new AddressType();
            $address_type->identifier = $item['identifier'];
            $address_type->getTranslationOrNew('ka')->name = $item['ka'];
            $address_type->getTranslationOrNew('en')->name = $item['en'];
            $address_type->save();
        }

    }
}
