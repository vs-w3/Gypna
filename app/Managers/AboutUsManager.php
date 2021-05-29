<?php

namespace App\Managers;

use App\Models\AboutUs;
use App\Models\AboutUsCat;

class AboutUsManager
{
    /**
     * Returns Company Introduction Data for Main Page
     * 
     * @return $intro App\AboutUs
     */
    public static function getIntro()
    {
        $introCatID = AboutUsCat::where('identifier', 'introduction')->first()->id;
        $intro = AboutUs::where('cat_id', $introCatID)->first();
        return $intro;
    }
}