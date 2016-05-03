<?php
/**
*
*/
namespace App\Http\Controllers\kitchen;

use Auth;
use Validatot;
use Illuminate\Http\Request;

class WatchdogController extends BaseController
{
    // use ThrottlesLogins, AuthenticatesAndRegistersUsers;

    public function displayLogin(Request $req)
    {
        return view('auth.login');
    }

    public function postLogin(Request $req)
    {
        $email = $req->get('email');
        $password = $req->get('password');
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('/');
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}