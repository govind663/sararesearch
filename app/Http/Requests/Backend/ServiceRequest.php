<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
                'icon' => 'mimes:jpeg,png,jpg,webp|max:2048',
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'description' => 'required|array|min:1',
                'description.*' => 'required|string',
                'status' => 'required|numeric',
            ];
        }else{
            $rule = [
                'icon' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'description' => 'required|array|min:1',
                'description.*' => 'required|string',
                'status' => 'required|numeric',
            ];
        }
        return $rule;
    }


    public function messages()
    {
        return [
            'icon.required' => __('Icon is required'),
            'icon.mimes' => __('Icon must be a file of type: jpeg, png, jpg, webp.'),
            'icon.max' => __('The size of Icon should not exceed 2 MB.'),

            'name.required' => __('Service Name is required'),
            'name.string' => __('Service Name must be a string.'),
            'name.max' => __('Service Name must not exceed 255 characters.'),

            'slug.required' => __('Service Slug is required'),
            'slug.string' => __('Service Slug must be a string.'),
            'slug.max' => __('Service Slug must not exceed 255 characters.'),

            'description.required' => 'At least one description is required.',
            'description.*.required' => 'Each description field must be filled.',
            'description.*.string' => 'description must be a valid text.',

            'status.required' => __('Status is required'),
            'status.numeric' => __('Status must be a number.'),
        ];
    }
}
