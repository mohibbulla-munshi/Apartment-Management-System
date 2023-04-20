<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'string',
                'max:191',
            ],
            'name' => [
                'required',
                'string',
                'max:191',
            ],
            'email' => [
                'required',
                'email',
                'max:191',
                'unique:profiles,email',
            ],
            'dob' => [
                'required',
                'string',
                'max:191',
            ],
            'phone' => [
                'required',
                'digits:10',
            ],
            'course' => [
                'required',
                'string',
                'max:191',
            ],
        ];
    }
}
