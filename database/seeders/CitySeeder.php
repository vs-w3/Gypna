<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Region;
use App\Models\RegionTranslation;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
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
                'ka' => 'სოხუმი',
                'en' => 'sokhumi',
                'identifier' => 'abkhazia',
            ],
            [
                'ka' => 'ბათუმი',
                'en' => 'batumi',
                'identifier' => 'adjara',
            ],
            [
                'ka' => 'ოზურგეთი',
                'en' => 'ozurgeti',
                'identifier' => 'guria',
            ],
            [
                'ka' => 'ქუთაისი',
                'en' => 'kutaisi',
                'identifier' => 'imereti',
            ],
            [
                'ka' => 'თელავი',
                'en' => 'telavi',
                'identifier' => 'kakheti',
            ],
            [
                'ka' => 'რუსთავი',
                'en' => 'rustavi',
                'identifier' => 'kvemo kartli',
            ],
            [
                'ka' => 'მცხეთა',
                'en' => 'mtskheta',
                'identifier' => 'mtskheta-mtianeti',
            ],
            [
                'ka' => 'ამბროლაური',
                'en' => 'ambrolauri',
                'identifier' => 'racha-lechkhumi and kvemo svaneti',
            ],
            [
                'ka' => 'ზუგდიდი',
                'en' => 'zugdidi',
                'identifier' => 'samegrelo and zemo svaneti',
            ],
            [
                'ka' => 'ახალციხე',
                'en' => 'akhaltsikhe',
                'identifier' => 'samtskhe-javakheti',
            ],
            [
                'ka' => 'გორი',
                'en' => 'gori',
                'identifier' => 'shida kartli',
            ],
            [
                'ka' => 'თბილისი',
                'en' => 'tbilisi',
                'identifier' => 'tbilisi'
            ]
        ];
        foreach($data as $item) {
            $region_id = RegionTranslation::where('name', '=', $item['identifier'])->first()->region_id; 
            $city = new City();

            $city->region_id = $region_id;
            $city->getTranslationOrNew('ka')->name = $item['ka'];
            $city->getTranslationOrNew('en')->name = $item['en'];
            $city->save();
        }
    }
}
