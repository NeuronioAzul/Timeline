<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->method() === 'PATCH' || $this->method() === 'PUT') {
            $rules = [];
            foreach ($this->all() as $key => $value) {
                if ($key === 'name') {
                    $rules[$key] = 'required|string|max:255,unique:tags';
                }
                if ($key === 'color') {
                    $rules[$key] = 'required|string|max:7';
                }
            }
        }

        return $rules;
    }

}
