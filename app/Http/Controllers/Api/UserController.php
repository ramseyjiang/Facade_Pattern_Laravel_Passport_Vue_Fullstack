<?php

namespace Fspafs\Http\Controllers\Api;

use Fspafs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Fspafs\Http\Requests\UserLoginRequest;
use Fspafs\Http\Requests\UserRegisterRequest;
use UserService;
use UserRepository;
use Illuminate\Http\Response;

class UserController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Rewrite login function in AuthenticatesUsers class for username or password login.
     *
     * @param  Fspafs\Http\Requests\UserLoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(UserLoginRequest $request)
    {
        UserService::checkLogin($request->username, $request->password);

        if ($user = $request->user()) {
            return response()->json([
                'access_token' => $user->createToken('Personal Access Token')->accessToken,
                'token_type' => 'bearer'
            ]);
        } else {
            return response()->json([
                'errors' => trans('auth.failed')
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function register(UserRegisterRequest $request)
    {
        $user = UserRepository::createUser($request->all());

        return response()->json([
            'access_token' => $user->createToken('Personal Access Token')->accessToken,
            'token_type' => 'bearer'
        ], Response::HTTP_CREATED);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        if(auth()->guard('api')->check()) {
            auth()->guard('api')->user()->token()->revoke();
            auth()->guard('api')->user()->token()->delete();
        }

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user()
    {
        return response()->json(auth()->guard('api')->user());
    }
}
