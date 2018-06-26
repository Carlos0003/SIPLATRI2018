<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
        if($this->method() == 'PUT') {
            return [
            'name'      => 'required',
            'user_id'   => 'required',
            'state'     => 'required',
            'usability' => 'required',
            ];
        }else{
            return [
            'name'      => 'required',
            'user_id'   => 'required',
            'state'     => 'required',
            'usability' => 'required',
            ];
        }
    }
    public function messages() 
    {
        return[
            'fullname.required'     => "El campo Nombre es obligatorio.",
            'state.required'        => "El campo Responsable es obligatorio.",
            'state.unique'          => "El campo Estado es obligatorio.",
            'usability.required'    => "El campo Usabilidad es obligatorio.",

       ];
    }
}
