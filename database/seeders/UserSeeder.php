<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'userable_id' => 1,
            'userable_type' => 'App\Models\PersonalProfile',
            'email' => 'root@gmail.com',
            'password' => Hash::make('123123123')
        ]);
    }
}
