<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'm_name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:restaurants',
            'contact_email' => 'required|email|unique:restaurants',
            'phone' => 'required|min:11|max:11',
            'm_phone' => 'required|min:11|max:11',
            'password' => 'required|confirmed|min:6',
        ];
    }
}
