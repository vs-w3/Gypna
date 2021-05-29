<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\AboutUsCat;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
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
                'title' => [
                    'en' => 'Mission',
                    'ka' => 'მისია'
                ],
                'body' => [
                    'en' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, impedit! Unde fuga cum doloremque lauda0ntium non',
                    'ka' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, impedit! Unde fuga cum doloremque lauda0ntium non',
                ],
                'cat_id' => AboutUsCat::where('identifier', 'mission')->first()->id
            ],
            [
                'title' => [
                    'en' => 'Vission',
                    'ka' => 'ხედვა'
                ],
                'body' => [
                    'en' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, impedit! Unde fuga cum doloremque lauda0ntium non',
                    'ka' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, impedit! Unde fuga cum doloremque lauda0ntium non',
                ],
                'cat_id' => AboutUsCat::where('identifier', 'vission')->first()->id
            ],
            [
                'title' => [
                    'en' => 'Georgian Yang Pediatrics & Neonatologists Association',
                    'ka' => 'საქართველოს ახალგაზრდა ნეონატოლოგთა და პედიატრთა ასოციაცია'
                ],
                'body' => [
                    'en' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, impedit! Unde fuga cum doloremque lauda0ntium non',
                    'ka' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, impedit! Unde fuga cum doloremque lauda0ntium non',
                ],
                'cat_id' => AboutUsCat::where('identifier', 'introduction')->first()->id
            ]
        ];
        foreach($data as $item) {
            $aboutUs = new AboutUs();
            $aboutUs->getTranslationOrNew('ka')->title = $item['title']['ka'];
            $aboutUs->getTranslationOrNew('en')->title = $item['title']['en'];
            $aboutUs->getTranslationOrNew('ka')->body = $item['body']['ka'];
            $aboutUs->getTranslationOrNew('en')->body = $item['body']['en'];
            $aboutUs->cat_id = $item['cat_id'];
            $aboutUs->save();
        }
    }
}
