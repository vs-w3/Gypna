<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Speciality::create([
            'ka' => ['name' => 'ნეონატოლოგია'],
            'en' => ['name' => 'Neonatoogy'],
        ]);
    }
}
