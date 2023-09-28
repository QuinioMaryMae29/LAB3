<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function userinterface()
    {
        return view('userinterface');
    }
}
