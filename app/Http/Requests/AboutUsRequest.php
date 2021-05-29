<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cat_id' => 'required|integer',
            
            'title_ka' => 'required|string',
            'body_ka' => 'required|string',

            'title_en' => 'nullable|string',
            'body_en' => 'nullable|string'
        ];
    }
}
