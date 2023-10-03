<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function admin()
    {
        return view('user/login');
    }

    public function register()
    {
        return view('user/register');
    }

    public function save()
    {
        $validation = $this->validate([
            'username' => 'required',
            
        ]);
    }
}
