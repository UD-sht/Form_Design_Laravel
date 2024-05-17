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
            // 'father_name' => 'required|string|max:255',
            // 'mother_name' => 'required|string|max:255',
            // 'parent_address' => 'required|string|max:255',
            // 'age' => 'required',
            // 'passport_number' => 'required',
            // 'issuing_country' => 'required',
            // 'issuing_office' => 'required',
            // 'issuing_place' => 'required',
            // 'passport_issue_date' => 'required',
            // 'valid_period' => 'required', 
            // 'attached_file.*' => 'required',
        ];
    }
}
