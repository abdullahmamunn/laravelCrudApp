<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'data' => 'required'
        ];

        if ($this->has('id'))
        {
            $rules += [
                'email' => 'required|unique:students,email,'.$this->id,
                'phone' => 'required|unique:students,phone,'.$this->id,
            ];
        } else {
            $rules += [
                'email' => 'required|unique:students',
                'phone' => 'required|unique:students',
            ];
        }

        return $rules;
    }
}
