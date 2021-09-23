<?php

namespace App\Managers;

use Illuminate\Support\Facades\Storage;

class FileManager
{
    /**
     * Check Model has property
     * 
     * @param object $model
     * @param string $property
     * @return boolean
     */
    public static function checkProperty($model, $property)
    {
        //return property_exists($model, $property);
        return array_key_exists($property, $model->toArray());
    }

    /**
     * Get model's file name by property
     * 
     * @param object $model
     * @param string $property
     * @return string
     */
    public static function getFIle($model, $property)
    {
        if(self::checkProperty($model, $property)) {
            return $model->{$property};
        } else {
            $fileable = strtolower(class_basename($model)) . 'able';
            return $model->{$fileable}->{$property};
        }
    }

    /**
     * Save model's file name by property
     * 
     * @param object $model
     * @param string $property
     * @param resource $file
     * @return string
     */
    public static function saveFIle($model, $property, $file)
    {
        if(self::checkProperty($model, $property)) {
            $model->{$property} = $file;
            return $model->save();
        } else {
            $fileable = strtolower(class_basename($model)) . 'able';
            $model->{$fileable}->{$property} = $file;
            return $model->{$fileable}->save();
        }
    }

    /**
     * Public Image Path
     * 
     * @return string
     */
    public static function publicImagePath()
    {
        return 'public/images';
    }

    /**
     * Get Public Image
     * 
     * @param object $model
     * @param string $property
     */
    public static function getPublicImage($user, $property)
    {
        return Storage::url('public/images/' . self::getFIle($user, $property)); 
    }

    /**
     * Save Public image
     * 
     */
    public static function savePublicImage($model, $property, $resource)
    {
        $path = $resource->store(self::publicImagePath());

        $imgName = explode(self::publicImagePath() . '/', $path)[1];
        self::saveFIle($model, $property, $imgName);
    }
}