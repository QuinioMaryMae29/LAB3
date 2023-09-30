<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function admin()
    {
        return view('admin');
    }

    public function register()
    {
        
    }
}
