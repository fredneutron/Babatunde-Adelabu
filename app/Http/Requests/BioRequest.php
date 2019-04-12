<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/3/18
 * Time: 6:57 PM
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class BioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|min:2|max:255',
            'other_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'bio_description' => 'required|string|min:5|max:500',
            'gender' => 'required|string',
            'profile_picture' => 'required|string',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
