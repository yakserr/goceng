<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndicationCreateRequest extends FormRequest
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
            'indication_code' => 'required|unique:indications,indication_code',
            'indication_name' => 'required'
        ];
    }
}
