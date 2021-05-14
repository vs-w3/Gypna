<?php

namespace App\Managers;

class TranslationManager
{
    /**
     * Returns True If Models all translatable fields are translated;
     * 
     * @param object $model App\Models
     * @param string $local 
     */
    public static function hasTranslationIn($model, $local)
    {

    }

    /**
     * Get Translation
     * 
     * @param object $model App\Models
     * @param $field
     * @param string $locale
     */
    public static function getTranslationIn($model, $field, $locale)
    {
        if($field) {
            return $field;
        } else {
            return '';
        }

    }
}