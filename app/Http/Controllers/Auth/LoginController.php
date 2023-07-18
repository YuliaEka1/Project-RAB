<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $username = $request->input('username');
        $password = $request->input('password');

        $query = 'CALL login_user(?, ?)';
        $users = DB::select($query, [$username, $password]);


        if ($username && $password) {  // Corrected the condition
            if (!empty($users)) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid username or password');
            }
        } else {
            return redirect()->back()->with('error', 'Please provide both username and password');
        }
    }
}
