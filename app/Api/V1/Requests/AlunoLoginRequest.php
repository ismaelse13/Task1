<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class AlunoLoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'matricula' => 'required',
            'password' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
