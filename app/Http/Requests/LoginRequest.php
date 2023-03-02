<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Validator;
class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'usuario' => 'required',
            'password' => 'required' 
        ];
    }
    // public function getCredentials()
    // {
       
    //     $username = $this->get('usuario');

    //     if ($this->isEmail($username)) {
    //         return [
    //             'nombre' => $username,
    //             'password' => $this->get('password')
    //         ];
    //     }

    //     return $this->only('username', 'password');
    // }
    // private function isEmail($param)
    // {
    //     $factory = $this->container->make(ValidationFactory::class);

    //     return ! $factory->make(
    //         ['usuario' => $param],
    //         ['usuario' => 'nombre']
    //     )->fails();
    // }
}
