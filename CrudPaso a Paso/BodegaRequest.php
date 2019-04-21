<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BodegaRequest extends FormRequest
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
            'nombreBodega'=>'unique:bodega|required',
			'direccionBodega'=>'unique:bodega|required',
        ];
    }
}
