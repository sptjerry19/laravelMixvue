<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'required',
            'description' => 'nullable|string|max:255',
            'star' => 'nullable',
            'Evaluate' => 'nullable|integer',
            'sold' => 'required|integer',
            'discount' => 'nullable|integer',
            'price' => 'required|integer',
            'Classify' => 'nullable|string',
            'size' => 'nullable|string',
            'views' => 'nullable|integer',
        ];
    }
}
