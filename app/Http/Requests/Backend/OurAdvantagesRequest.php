<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class OurAdvantagesRequest extends FormRequest
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
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'advantages_title' => 'required|array|min:1',
                'advantages_title.*' => 'required|string',
                'advantages_description' => 'required|array|min:1',
                'advantages_description.*' => 'required|string',
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'advantages_title' => 'required|array|min:1',
                'advantages_title.*' => 'required|string',
                'advantages_description' => 'required|array|min:1',
                'advantages_description.*' => 'required|string',
            ];
        }
        return $rule;
    }

    public function messages(){
        return [
            'title.required' => __('Title is required'),
            'title.string' => __('Title must be a string.'),
            'title.max' => __('Title must not exceed 255 characters.'),

            'description.required' => __('Description is required'),
            'description.string' => __('Description must be a string.'),

            'advantages_title.required' => __('Advantages Title is required'),
            'advantages_title.array' => __('Advantages Title must be an array.'),
            'advantages_title.min' => __('Advantages Title must have at least 1 item.'),
            'advantages_title.*.required' => __('Advantages Title is required'),
            'advantages_title.*.string' => __('Advantages Title must be a string.'),
            
            'advantages_description.required' => __('Advantages Description is required'),
            'advantages_description.array' => __('Advantages Description must be an array.'),
            'advantages_description.min' => __('Advantages Description must have at least 1 item.'),            
            'advantages_description.*.required' => __('Advantages Description is required'),
            'advantages_description.*.string' => __('Advantages Description must be a string.'),
        ];
    }
}
