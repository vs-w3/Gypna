<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonProfileTranslation extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'lastname'];
    
    public $timestamps = false;
}
