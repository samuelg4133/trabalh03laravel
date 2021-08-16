<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            "name" => "bail|required|unique:cars,name,$this->brand->id",
            "description" => "bail|required|min:4",
            "year" => "bail|required|max:4|min:4|",
            "mileage" => "bail|required",
            "motor" => "bail|required|string",
            "brand_id" => "required"
        ];
    }

    public function attributes()
    {
        return ["brand_id" => "marca", "mileage" => "quilometragem"];
    }
}
