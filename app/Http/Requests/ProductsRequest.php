<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'title' => 'required|string',
            'overview' =>'nullable',
            'description'=>'required|string',
            'image'=>'nullable',
            'badge'=>'nullable',
            'quantity'=>'nullable',
            'price'=>'nullable',
            'offer'=>'nullable',
            'sale_price'=>'nullable',
            'stock_count'=>'nullable',
            'vendor_id'=>'required',
            'cat_id'=>'required',
            'brand_id'=>'required',
            'url'=>'nullable',
            'status'=>'nullable'
        ];
    }
}
