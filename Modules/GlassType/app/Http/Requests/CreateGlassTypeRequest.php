<?php

namespace Modules\GlassType\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\GlassType\Models\GlassType;

class CreateGlassTypeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $statusRule = Rule::in(GlassType::status); 

        return [
            'name' => 'required',
            'description' => 'text',
            'status' => ['nullable',$statusRule] 
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
