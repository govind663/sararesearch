<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
                'banner_image' => 'mimes:jpeg,png,jpg,webp|max:2048',
                'banner_video' => 'mimes:mp4|max:10000',
                'page_id' => 'required|string|max:255',
                'status' => 'required|numeric',
                'title' => 'required|array|min:1',
                'title.*' => 'required|string|max:255',
            ];
        }else{
            $rule = [
                'banner_image' => 'mimes:jpeg,png,jpg,webp|max:2048',
                'banner_video' => 'mimes:mp4|max:10000',
                'page_id' => 'required|string|max:255',
                'status' => 'required|numeric',
                'title' => 'required|array|min:1',
                'title.*' => 'required|string|max:255',
            ];
        }
        return $rule;
    }

    public function messages()
    {
        return [

            'banner_image.mimes' => __('Banner image must be a file of type: jpeg, png, jpg, webp.'),
            'banner_image.max' => __('The size of banner image should not exceed 2 MB.'),

            'banner_video.mimes' => __('Banner video must be a file of type: mp4.'),
            'banner_video.max' => __('The size of banner video should not exceed 10MB.'),

            'page_id.required' => __('Page Name is required'),
            'page_id.string' => __('Page Name must be a string.'),
            'page_id.max' => __('Page Name must not exceed 255 characters.'),

            'status.required' => __('Status is required'),
            'status.numeric' => __('Status must be a number.'),

            'title.required' => 'At least one title is required.',
            'title.*.required' => 'Each title field must be filled.',
            'title.*.string' => 'Title must be a valid text.',
            'title.*.max' => 'Title should not exceed 255 characters.',

        ];
    }
}
