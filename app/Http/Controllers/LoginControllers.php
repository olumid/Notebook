<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;

class LoginControllers extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $username  = 'username ';
    protected $redirectTo = '/frontpage';
    protected $guard  = 'web';

    public function getLogin()
    {
        if(Auth::guard('web')->check()){
            return redirect()->route('frontpage');
        }

        return redirect()->route('login');
    }

    public function postLogin(Request $request){
        $auth = Auth::guard('web')->attempt(['username'=>$request['username'],'password'=>$request['password']]);

        if($auth){
            return redirect()->route('frontpage');
        }

        return redirect()->route('/');
    }

    public function getLogout(){
        Auth::guard('web')->logout();
        return redirect()->route('/');

    }
}
