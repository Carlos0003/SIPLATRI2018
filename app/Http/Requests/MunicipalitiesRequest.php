<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MunicipalitiesRequest extends FormRequest
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
            'name'      => 'required|:municipalities',
            ];
        }else{
            return [
            'name'  => 'required|:municipalities',
            ];
        }
    }
    public function messages() {
        return[
            'name'        => "El campo Nombre de Programa es obligatorio.",
            'name'          => "El campo Nombre de Programa ya está en uso.",
       ];
    }
}
