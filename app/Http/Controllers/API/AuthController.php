<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Signin;
use App\Http\Requests\Auth\Signup;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;

class AuthController extends Controller
{
    /**
     * Get a new UserService instance.
     *
     * @return void
     */
    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
        $this->middleware('auth:api', ['except' => ['login','signup']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Signin $data)
    {
        $credentials = request(['login', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        // return response()->json(auth()->user());
        $user = $this->user_service->getMeInfo(auth()->user()->id);


        return response()->json([
            'error' => null,
            'status' => true,
            'data' => $user
        ],200);

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'error' => null,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 600,
            'user' => $this->user_service->getMeInfo(auth()->user()->id)
        ]);
    }

    /**
     * Signup user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function signup(Signup $data)
    {
        $user = $this->user_service->store($data->all());

        return response()->json([
            'error' => null,
            'status' => true,
            'message' => 'User registered successfully'
        ],201);

    }
}
