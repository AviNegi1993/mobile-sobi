<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title'=>'required|string',
            'device_id'=>'required',
            'repair_id'=>'required',
            'manufacture_id'=>'required',
            'sale_price'=>'required',
            'real_price'=>'required',
            'description'=>'required',

        ];
    }
}
