<?php

namespace Rofil\Security\Http\Requests;

use App\Http\Requests\Request;

class UserFormLoginRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required',
        ];
    }
}