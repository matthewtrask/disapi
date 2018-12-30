<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

    public function getEmail() : string
    {
        return $this->get('email');
    }

    public function getName() : string
    {
        return $this->get('name');
    }

    public function getPassword() : string
    {
        return $this->get('password');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'     => 'required|unique:users,email|string',
            'name'      => 'required|string',
            'password'  => 'required|string',
        ];
    }
}
