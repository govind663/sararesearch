<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            ];
        }else{
            $rule = [
                'title' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages(){
        return [
            'title.required' => __('Page Name is required'),
            'title.string' => __('Page Name must be a string.'),
            'title.max' => __('Page Name must not exceed 255 characters.'),
        ];
    }
}
