<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        // Default rules
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Image is optional by default
        ];

        // If the request is a store request (POST), make the image required
        if ($this->isMethod('post')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'; // Image is required for store
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'The author name is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a jpeg, png, jpg, gif, or svg.',
            'image.max' => 'The image must not be greater than 2MB.',
            'description.required' => 'The description is required.',
            'description.max' => 'The description must not exceed 1000 characters.',
        ];
    }

}
