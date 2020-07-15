<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
     * Get the validation rules that apply to the request

     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'required',
            // 'phone'=>'required|min:11|max:16',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password',
            'profile_pic'=>"nullable|mimes:png,jpg"
        ];
    }
}
