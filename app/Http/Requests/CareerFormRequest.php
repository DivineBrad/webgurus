<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerFormRequest extends FormRequest
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
        return [
            'title' => 'required',
            'description' => 'required',
            'juniorSalary' => 'required|numeric|min:0',
            'seniorSalary' => 'required|numeric|min:0',
            'unrate' => 'required|numeric|min:0|max:100',
            'satisfaction'=>'required',
            'careergroups' => 'required',
        ];
    }
}
