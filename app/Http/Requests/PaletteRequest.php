<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaletteRequest extends FormRequest
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
            'color1' => 'required',
            'color2' => 'required',
            'color3' => 'required',
            'color4' => 'required',
        ];
    }
}
