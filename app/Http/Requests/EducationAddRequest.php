<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationAddRequest extends FormRequest
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
            'education_date'        =>  'required|max:255',
            'school_name'           =>  'required|max:255',
            'education_department'  =>  'required|max:255',
        ];
    }
    public function messages()
    {
        return[
            "education_date.required"   =>  "Bu alan zorunludur",
            "education_date.max"        =>  "En fazla 255 karakter girebilirsiniz"
        ];
    }
}
