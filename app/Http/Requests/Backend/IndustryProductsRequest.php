<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class IndustryProductsRequest extends FormRequest
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
                'slug' => 'required|string|max:255|unique:industry_products,slug',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [
            'name.required' => __('Industry Name is required'),
            'name.string' => __('Industry Name must be a string.'),
            'name.max' => __('Industry Name must not exceed 255 characters.'),

            'slug.required' => __('Industry Slug is required'),
            'slug.string' => __('Industry Slug must be a string.'),
            'slug.max' => __('Industry Slug must not exceed 255 characters.'),
            'slug.unique' => __('Industry Slug must be unique.'),
        ];
    }
}
