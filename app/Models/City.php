<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class City extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $fillable = ['region_id'];
    public $translatedAttributes = ['name'];



    // Relationships
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}
