<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
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
                'ka' => 'აფხაზეთი', 
                'en' => 'abkhazia',
            ],
            [
                'ka' => 'აჭარა',
                'en' => 'adjara',
            ],
            [
                'ka' => 'გურია',
                'en' => 'guria',
            ],
            [
                'ka' => 'იმერეთი',
                'en' => 'imereti',
            ],
            [
                'ka' => 'კახეთი',
                'en' => 'kakheti',
            ],
            [
                'ka' => 'ქვემო ქართლი',
                'en' => 'kvemo kartli',
            ],
            [
                'ka' => 'მცხეთა-მთიანეთი',
                'en' => 'mtskheta-mtianeti',
            ],
            [
                'ka' => 'რაჭა-ლეჩხუმი და ქვემო სვანეთი',
                'en' => 'racha-lechkhumi and kvemo svaneti',
            ],
            [
                'ka' => 'სამეგრელო-ზემო სვანეტთ',
                'en' => 'samegrelo and zemo svaneti',
            ],
            [
                'ka' => 'სამცხე-ჯავახეთი',
                'en' => 'samtskhe-javakheti',
            ],
            [
                'ka' => 'შიდა ქართლი',
                'en' => 'shida kartli',
            ],
            [
                'ka' => 'თბილისი',
                'en' => 'tbilisi'
            ]
        ];
        foreach($data as $item)
        {
            $region = new Region();
            $region->getTranslationOrNew('ka')->name = $item['ka'];
            $region->getTranslationOrNew('en')->name = $item['en'];
            $region->save();
        }
    }
}
