<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'email' => 'email|required',
            'f_name' => 'required',
            'l_name' => 'required',
            'father' => 'required',
            'dob' => 'date',
            'mother' => 'required',
            'pincode' => 'max:6|required|numeric',
            'course' => 'required',
        
        ];
    }
}
