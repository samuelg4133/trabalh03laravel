<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            "name"=> "bail|required|unique:brands,name,$this->brand->id",
            "foundation_date" => 'bail|required|date',
            "slogan" => "required|string",
            "active" => "boolean",
            "country_id" => 'required'
        ];
    }

    public function attributes()
    {
        return [
            "foundation_date" => "data de fundação",
            "country_id" => "país sede"
        ];
    }
}
