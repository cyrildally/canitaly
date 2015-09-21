<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContattiRequest extends Request
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
            'titolo'        =>  'required|max:255|alpha',
            'descrizione'   =>  'required',
            'upload'        => 'required|image',
            'citta'         =>  'required|max:255|alpha',
        ];
    }
}
