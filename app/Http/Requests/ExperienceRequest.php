<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'date'       =>'required| max:255',
            'company'   =>'required| max:255',
            'task_name' =>'required| max:255'
        ];
    }
    public function messages()
    {
        return parent::messages();
    }
}
