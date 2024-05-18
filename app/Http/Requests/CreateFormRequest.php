<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
                'father_name' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
                'parent_address' => 'required|string|max:255',
                'age' => 'required|numeric|min:1|max:120',
                'passport_number' => 'required|regex:/^[A-Z0-9]{9}$/',
                'issuing_country' => 'required|string|max:255',
                'issuing_office' => 'required|string|max:255',
                'issuing_place' => 'required|string|max:255',
                'passport_issue_date' => 'required|date',
                'valid_period' => 'required|string|max:255', 
                'renounced_citizenship_number' => 'nullable|regex:/^[A-Z0-9]{10}$/',
                'nepali_citizen_number' => 'nullable|regex:/^[A-Z0-9]{10}$/',
                'attached_file.*' => 'required|file|mimes:jpg,png,pdf|max:2048',
            ];
    }
    public function messages()
    {
        return[
                'required' => 'This field is required.',
                'passport_number.regex' => 'The passport number must be exactly 9 alphanumeric characters.',
                'renounced_citizenship_number.regex' => 'The citizenship number must be exactly 10 alphanumeric characters.',
                'nepali_citizen_number.regex' => 'The citizenship number must be exactly 10 alphanumeric characters.',
                'attached_file.*.required' => 'This field is required.',
                'attached_file.*.file' => 'Each file must be a valid file.',
                'attached_file.*.mimes' => 'Each file must be a file of type: jpg, png, pdf.',
                'attached_file.*.max' => 'Each file may not be greater than 2048 kilobytes.',
    
            ];
    }

  
}