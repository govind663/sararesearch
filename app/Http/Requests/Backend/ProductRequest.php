<?php

namespace App\Http\Requests\Backend;

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
        if ($this->id){
            $rule = [
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:products,slug',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => __('Product Name is required'),
            'name.string' => __('Product Name must be a string.'),
            'name.max' => __('Product Name must not exceed 255 characters.'),

            'slug.required' => __('Product Slug is required'),
            'slug.string' => __('Product Slug must be a string.'),
            'slug.max' => __('Product Slug must not exceed 255 characters.'),
            'slug.unique' => __('Product Slug must be unique.'),
        ];
    }
}
