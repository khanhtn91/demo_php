<?php
include_once './model/product.php';
class productController
{
    function index()
    {
        $model = new product();
        $data = $model->getProduct();
        return [
            'view' => 'products',
            'products' => $data
        ];
    }
}