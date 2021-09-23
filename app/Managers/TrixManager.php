<?php

namespace App\Managers;

use Te7aHoudini\LaravelTrix\Models\TrixRichText;

class TrixManager
{
    /**
     * Save Record
     * 
     * @param string $field
     * @param App\Models\ $model;
     * @param array $data // locale key => input data
     */
    public static function saveRecord($field, $model, $data)
    {
        $trixRichText = new TrixRichText();
        foreach($data as $locale => $inputName) {
            $trixRichText->getTranslationOrNew($locale)->{$field} = $inputName;
        }
        $trixRichText->field = $field;
        $trixRichText->model_type = get_class($model);
        $trixRichText->model_id = $model->id;
        $trixRichText->save();
    }

    /**
     * Edit Record
     * 
     * @param App\Models\TrixRichText $trixRichText
     * @param string $field
     * @param array $data // locale key => input data
     */
    public static function editRecord($trixRichText, $field, $data)
    {
        foreach($data as $locale => $inputName) {
            $trixRichText->getTranslationOrNew($locale)->{$field} = $inputName;
        }
        $trixRichText->save();
    }

}