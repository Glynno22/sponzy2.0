<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'telephone' => 'required|string|max:15',
            'motpass' => 'required|string|min:6',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'telephone' => $this->telephone,
            'motpass' => $this->motpass,
        ]);
    }
}