<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutoRequest extends FormRequest
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

    /*Hier zorg ik ervoor dat er eisen/regels worden gesteld waar de code aan moet voldoen als die een requests stuurt*/
    public function rules()
    {
        return [
            'kenteken' => 'required',
            'type' => 'required',
            'merk' => 'required',
            'prijs_per_dag' => 'required',
            'image'=>'required'
        ];
    }
}
