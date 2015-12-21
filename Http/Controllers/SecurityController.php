<?php

namespace Rofil\Security\Http\Controllers;

use App\Http\Controllers\Controller;

class SecurityController extends Controller
{
    public function formLogin()
    {
        return view("RofilSecurity::security.form");
    }

    public function prosesLogin()
    {
        
    }

    public function logout()
    {
        
    }
}