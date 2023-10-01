<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('products/index', $data);
    }

    public function userinterface()
    {
        return view('userinterface');
    }

    public function admin()
    {
        return view('admin');
    }

    public function create()
    {
        return view('products/create');
    }

    public function save()
    {
        $this->productModel->save($_POST);
        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $data['products'] = $this->productModel->find($id);
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $this->productModel->edit($id, $_POST);
        return redirect()->to('/products');
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/products');
    }
}
