<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['ka' => 'ნეონატოლოგია',    'en' => 'Neonatology'],
            ['ka' => 'პედიატრია',        'en' => 'Pediatry']
        ];
        foreach($data as $item) {
            $speciality = new Speciality();

            $speciality->getTranslationOrNew('ka')->name = $item['ka'];
            $speciality->getTranslationOrNew('en')->name = $item['en'];
            $speciality->save();
        }
    }
}
