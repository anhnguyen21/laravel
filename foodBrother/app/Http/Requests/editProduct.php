<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
            'name'=> 'required|min:5|max:25',
            'description'=> 'required|min:20',
            'price'=> 'required|max:30',
            'fileimages' => 'required|image',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name.min'=>'Ten lon hon 5 ki tu',
            'name.max'=>'Ten nho hon 15 ki tu',
            'description.required'=>'khong dươc de trong',
            'price.required'=>'khong dươc de trong',
            'fileimages.required'=>'khong dươc de trong',
            'fileimages.image'=>'Là image',
        ];
    }
}
