<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function getEmail() : string
    {
        return $this->get('email');
    }

    /** @return string[] */
    public function rules() : array
    {
        return [
            'email' => 'required|email',
        ];
    }
}
