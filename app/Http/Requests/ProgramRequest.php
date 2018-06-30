<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
            'name'      => 'required|unique:programs',
            ];
        }else{
            return [
            'name'  => 'required|unique:programs',
            ];
        }
    }
    public function messages() {
        return[
            'name.required'        => "El campo Nombre de Programa es obligatorio.",
            'name.unique'          => "El campo Nombre de Programa ya está en uso.",
       ];
    }
}
