<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbilitiesRequest extends FormRequest
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
            'program_id'   => 'required',
            'durationHour'     => 'required',
            ];
        }else{
            return [
            'name'      => 'required',
            'program_id'   => 'required',
            'durationHour'     => 'required',
            ];
        }
    }
     public function messages() 
    {
        return[
            'name.required'     => "El campo Nombre es obligatorio.",
            'program_id.required'        => "El campo Programa es obligatorio.",
            'durationHour.unique'          => "El campo Horas es obligatorio.",
       ];
    }
}
