<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class GinstagramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required|image',
            'text' => 'required|max:255',
            'link' => 'required|max:255',
        ];
    }
}
