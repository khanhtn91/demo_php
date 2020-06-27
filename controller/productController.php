<?php
include './model/sanpham.php';
class productController {
    
    public function detailAction() {
        $id = (int)$_GET['id'];
        $model = new sanpham();
        $data = $model->getDetail($id);
        return [
            'view' => 'productDetail',
            'data' => $data,
        ];
    }
   
}