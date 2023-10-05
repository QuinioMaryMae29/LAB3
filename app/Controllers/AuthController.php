<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct(){
        helper('url','form');
    }

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
             'email' => 'required|valid_email|is_unique[users.email]',
             'password' => 'required|min_length[5]|max_length[12]',
             'confirmpassword' => 'required|min_length[5]|max_length[12]|matches[password]'
        ]);

        if(!$validation){
            return view('user/register',['validation'=>$this->validator]);
        }else{
            echo 'registered successfully';
        }
    }
}
