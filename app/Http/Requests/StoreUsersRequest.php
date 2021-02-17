<?php
/**
 * Created by PhpStorm.
 * User: Chenn
 * Date: 6-1-2021
 * Time: 14:01
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class StoreUsersRequest extends FormRequest
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


            'name' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'password' => 'required',

        ];
    }
}
