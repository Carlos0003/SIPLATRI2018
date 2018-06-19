<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
            'document'      => 'required|unique:users',
            'fullname'      => 'required',
            'email'         => 'required|unique:users,email,',
            'phonenumber'   => 'required|numeric',
            'municipality'  => 'required',
            'gender'        => 'required',
            'role'          => 'required',
            'contract'      => 'required',
            'state'         => 'required',
            ];
        }else{
            return [
            'document'      => 'required|unique:users',
            'fullname'      => 'required',
            'email'         => 'required|unique:users,email,',
            'password'      => 'required|min:6|confirmed',
            'phonenumber'   => 'required|numeric',
            'municipality'  => 'required',
            'gender'        => 'required',
            'role'          => 'required',
            'contract'      => 'required',
            'state'         => 'required',
            ];
        }
    }
    public function messages() {
        return[
            'document.required'     => "El campo Documento es obligatorio.",
            'fullname.required'     => "El campo Nombre es obligatorio.",
            'email.required'        => "El campo Correo electronico es obligatorio.",
            'email.unique'          => "El campo Correo electronico ya está en uso.",
            'password.required'     => "El campo Contraseña es obligatorio.",
            'phonenumber.required'  => "El campo Numero telefonico es obligatorio.",
            'municipality.required' => "El campo Municipalidad es obligatorio.",
            'gender.required'       => "El campo Género es obligatorio.",
            'role.required'         => "El campo Rol es obligatorio.",
            'contract.required'     => "El campo Tipo de Contrato es obligatorio.",
            'state.required'        => "El campo estado es obligatorio.",
       ];
    }
}
