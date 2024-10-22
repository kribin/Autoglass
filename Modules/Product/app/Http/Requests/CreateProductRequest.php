<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\Product\Models\Product;

class CreateProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $statusRule = Rule::in(Product::status); 
        $stockRule = Rule::in(Product::stock); 

        return [
            'name' => 'required',
            'description' => 'required',
            'sku' => 'required',
            'price' => 'required',
            'image' => 'required',
            'status' => ['required',$statusRule],
            'stock' => ['required',$stockRule],
            'vehicle_type_id' => 'required',
            'vehicle_brand_id' => 'required',
            'vehicle_model_id' => 'required',
            'vehicle_series_id' => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
