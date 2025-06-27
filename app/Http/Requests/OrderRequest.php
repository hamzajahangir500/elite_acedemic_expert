<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'email' => 'required|email|max:255|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com)$/i',
            'phone' => 'required|regex:/^(\+?\d{1,3})?[-. ]?\d{10}$/',
            'type_of_paper' => 'required|string',
            'discipline' => 'required|string',
            'academic_level' => 'required|string',
            'urgency' => 'required|string',
            'spacing' => 'required|string',
            'paper_title' => 'nullable|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'paper_details' => 'nullable|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'pages' => 'required|numeric',
            'sources' => 'required|numeric',
            'format' => 'required|string',
            'writer_preference' => 'required|string',
            'additional_material' => 'nullable|file|mimes:doc,docx,pdf|max:2048', // Max size in KB (2MB here)
        ];
    }
}
