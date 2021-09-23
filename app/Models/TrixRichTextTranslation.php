<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Models\TrixRichText;

class TrixRichTextTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['content'];
}
