<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $admin = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1,
            'is_login' => '0',
        ];

        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 2,
            'is_login' => '0',
        ];

        if (Auth::attempt($admin)){

            $this->isLogin(Auth::id());
            return redirect()->route('admin.event.index');
        } elseif (Auth::attempt($user)){

            $this->isLogin(Auth::id());
            return redirect()->route('user.event.index');
        }

        return redirect()->route('login');

    }
    public function logout(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user -> update([
            'is_login'=> '0',
        ]);

        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }

    private function isLogin(?int $id)
    {
        $user = User::findOrFail($id);
        return $user -> update([
            'is_login'=> '1',

        ]);
    }
}
