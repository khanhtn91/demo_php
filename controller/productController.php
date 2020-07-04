<?php
include_once './model/sanpham.php';
include_once './model/danhmuc.php';

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
   
    public function categoryAction() {
        $idDanhmuc1 = (int)$_GET['id_danhmuc1'];
        $idDanhmuc2 = (int)$_GET['id_danhmuc2'];

        $model = new sanpham();
        $data = $model->getproductByCategory($idDanhmuc1, $idDanhmuc2);
        $danhmucModel = new danhmuc();
        $category = $danhmucModel->getDetailDanhmuc($idDanhmuc1, $idDanhmuc2);
        return [
            'view' => 'category',
            'data' => $data,
            'category' => $category,
        ];
    }
   
}