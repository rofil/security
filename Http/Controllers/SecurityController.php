<?php

namespace Rofil\Security\Http\Controllers;

use App\Http\Controllers\Controller;
use Rofil\Security\Entity\Eloquent\User;
use Rofil\Security\Http\Requests\UserFormLoginRequest;
use Auth;

class SecurityController extends Controller
{
    /**
     * This method uses to show the form login to the user
     * @return view()
     */
    public function formLogin()
    {
        return view("RofilSecurity::security.form");
    }

    /**
     * This method uses to check the user credential
     * @param  UserFormLoginRequest $request Request
     * @return redirect                      Response
     */
    public function prosesLogin(UserFormLoginRequest $request)
    {
        // print_r($request->all());
        $users = User::where('email', $request->get('username'))->where('password',$request->get('password'))->get();
        if($users->count() > 0){
            Auth::login($users->first());
            return redirect()->to('/')->with("message", ['alert'=> 'success', 'message'=> 'Welcome '.$users->first()->name.'.'. ' You successfully logged in.']);
        }
        return redirect()->back()->with("message", ['alert'=> 'danger', 'message'=> 'Combination Username and Password is not match']);
    }

    /**
     * This method uses to erase the user credential
     * @return redirect
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/')->with("message", ['alert'=> 'info', 'message'=> 'Thanks. You have logged out']);
    }
}