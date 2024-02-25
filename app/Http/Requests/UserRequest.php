<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation(){
        $this->merge([
            'is_active' => isset($this->is_active)
        ]);
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
            'username' => 'required|string|max:255',
            'role_id' => 'required|exists:roles,id',
            'phone' => 'required|numeric',
            'email' => 'required|email|string|unique:users,email',
            'address' => 'string|required',
            'gender' => 'required|string|in:male,female,other',
            'password' => 'required|min:6|confirmed',
            'is_active' => 'required|boolean'
        ];
    }
}
