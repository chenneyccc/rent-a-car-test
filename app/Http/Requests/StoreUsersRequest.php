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
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'adres' => 'required',
            'postcode' => 'required',
            'woonplaats' => 'required',

        ];
    }
}
