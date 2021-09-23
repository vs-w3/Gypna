<?php

namespace App\Models;

use App\Managers\EventManager;
use App\Managers\FileManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Models\TrixRichText;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class Event extends Model implements TranslatableContract
{
    use HasFactory;
    use HasTrixRichText;
    use Translatable;

    
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'description' => AsCollection::class,
    ];

    public $translatedAttributes = ['name'];

    // Relationships
    public function addresses()
    {
        return $this->morphToMany(Address::class, 'addressable');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    // Accessors

    public function getDomImageAttribute()
    { //dd('ddd');
        return EventManager::getEventImage($this);
    }
    public function getContentAttribute()
    {
        return TrixRichText::where('model_id', $this->id)->first();
    }

    public function getEventTrixAttribute()
    {
        return TrixRichText::where('model_id', $this->id)->first();
    }

    public function getHTMLStartTimeAttribute()
    {
        return implode('T',explode(' ', $this->event_start));
    }

    public function getHTMLEndTimeAttribute()
    {
        return implode('T',explode(' ', $this->event_end));
    }

    // Accessors
    public function getContentkaAttribute()
    {
        return TrixRichText::where('model_id', $this->id)->first()->translate('ka')->content;
    }


}
