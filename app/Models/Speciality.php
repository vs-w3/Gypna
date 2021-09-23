<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Speciality extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name'];





    /**
     * Relationships
     */
    public function doctors()
    {
        return $this->morphedByMany(User::class, 'specialityable');
    }

    public function topics()
    {
        //return $this->morphedByMany()
    }
    
}
