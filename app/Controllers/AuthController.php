<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

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
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $values = [
                'username'=>$username,
                'email'=>$email,
                'password'=>Hash::make($password),
            ];

            $userModel = new \App\Models\UserModel();
            $query = $userModel->insert($values);
            if(!$query){
                return redirect()->back()->with('Fail','Something went wrong');
            }else{
                return redirect()->back()->with('Success','You are now registered successfully!');
            }
        }
    }

    public function check(){
        $validation = $this->validate([
            'username' => 'required',
            'password' => 'required|min_length[5]|max_length[12]',
        ]);

        if(!$validation){
            return view('admin',['validation'=>$this->validator]);
        }else{
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $userModel = new \App\Models\UserModel();
            $user_info = $userModel->where('username', $username)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('Fail','Incorrect password');
                return redirect()->to('/admin')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('loggedInUser',$user_id);
                return redirect()->to('/userinterface');
            }
        }
    }
}
