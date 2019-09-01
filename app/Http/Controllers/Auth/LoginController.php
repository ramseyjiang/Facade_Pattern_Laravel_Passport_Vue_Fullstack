<?php

namespace Fspafs\Http\Controllers\Auth;

use Fspafs\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Fspafs\Http\Requests\UserLoginRequest;
use UserService;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

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

        if ($request->user()) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
}
