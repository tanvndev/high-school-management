<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\ResponseEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = JWTAuth::attempt($credentials)) {
            return $this->respondWithToken($token, 'Đăng nhập thành công.');
        }
        return response()->json([
            'status' => ResponseEnum::UNAUTHORIZED,
            'messages' => ['Email hoặc mật khẩu không chính xác.'],
            'data' => []
        ], ResponseEnum::UNAUTHORIZED);
    }
    public function me()
    {
        $user = new UserResource(auth()->user());
        return response()->json($user);
    }
    protected function respondWithToken($token, $message)
    {
        return response()->json([
            'status' => ResponseEnum::OK,
            'messages' => [$message],
            'data' => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
            ]
        ], ResponseEnum::OK)->cookie(
            'access_token',
            $token,
            config('jwt.ttl'),
            '/',
            'localhost',
            false,
            true
        );
    }

    public function refreshToken()
    {
        return $this->respondWithToken(auth()->refresh(), 'Token đã được thay đổi');
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => ResponseEnum::OK,
            'messages' => 'Đăng xuất thành công.',
            'data' => []
        ], ResponseEnum::OK);
    }
}
