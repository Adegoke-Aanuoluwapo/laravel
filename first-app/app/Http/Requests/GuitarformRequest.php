<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuitarformRequest extends FormRequest
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
        return [
            'guitar-name' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer']
        ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'guitar-name' => strip_tags($this['guitar-name']),
            'brand' => strip_tags($this->brand),
            'year' =>  strip_tags($this->year)
        ]);
    }
}
