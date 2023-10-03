<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function admin()
    {
        return view('user/login');
    }
}
