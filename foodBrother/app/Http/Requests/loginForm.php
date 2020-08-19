<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginForm extends FormRequest
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
            'name'=> 'required|min:5|max:15',
            'email'=> 'required|email',
            'adress'=> 'required|max:30',
            'phone'=> 'required',
            'password' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.min'=>'Ten lon hon 5 ki tu',
            'name.max'=>'Ten nho hon 15 ki tu',
            'email.email'=>'phai la email',
        ];
    }
}
