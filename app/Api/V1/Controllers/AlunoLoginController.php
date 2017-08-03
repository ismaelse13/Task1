<?php

namespace App\Api\V1\Controllers;

use Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\AlunoLoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AlunoLoginController extends Controller
{
    public function login(AlunoLoginRequest $request, JWTAuth $JWTAuth)
    {

        \Config::set('auth.providers.users.model', \App\Aluno::class);
        $credentials = $request->only(['matricula', 'password']);

        try {
            $token = $JWTAuth->attempt($credentials);

            if(!$token) {
                throw new AccessDeniedHttpException();
            }

        } catch (JWTException $e) {
            throw new HttpException(500);
        }

        return response()
            ->json([
                'status' => 'ok',
                'token' => $token
            ]);
    }
}
