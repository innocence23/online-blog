<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * 添加状态验证 status
     * //https://laracasts.com/discuss/channels/laravel/adding-a-condition-to-auth-login?page=1
     * @param Request $request
     * @return array
     */
    protected function credentials(Request $request) {
        return array_merge($request->only($this->username(), 'password'), ['status' => 1]);
    }

    /**
     * 重写前后台退出页面 要不前后台一起退出
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        $this->guard()->logout();
        return redirect($this->redirectTo);
    }
}
