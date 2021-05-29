<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\AboutUsCat;
use Illuminate\Database\Seeder;

class AboutUsCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'mission',
            'vission',
            'introduction'
        ];
        foreach($data as $item) {
            AboutUsCat::create([
                'identifier' => $item
            ]);
        }
       
    }
}
