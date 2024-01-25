<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    public function login(Request $request)
    {   
        $input = $request->all();
    
        $this->validate($request, [
            'phonenumber' => 'required',
            'password' => 'required',
        ]);
    
        if (auth()->attempt(array('phonenumber' => $input['phonenumber'], 'password' => $input['password']))) {
            $user = auth()->user();
    
            if ($user->is_admin == 1) {
                return redirect()->route('admin.home');
            } else if ($user->is_admin == 2) {
                return redirect()->route('contentcreator.home');
            } else if ($user->is_admin == 3) {
                return redirect()->route('company.home');
            } else {
                return redirect()->route('welcome');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Phonenumber and Password are incorrect.');
        }
    }
    }