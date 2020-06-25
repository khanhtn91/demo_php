<?php
include './model/sanpham.php';
class indexController {
    public function indexAction() {
        $model = new sanpham();
        $pageNum = (int)$_GET['page'];
        $keyword = addslashes($_GET['keyword']);
        $sl = 3;
        $total = $model->totalData();
        $data = $model->page($pageNum, $sl, $keyword);
        $totalPage = ceil($total['total']/$sl);
        return [
            'view' => 'index',
            'data' => $data,
            'totalPage' => $totalPage
        ];
    }

    public function searchAction() {
        $model = new sanpham();
        $keyword = addslashes($_GET['keyword']);
        $data = $model->search($keyword);
        return [
            'view' => 'index',
            'data' => $data
        ];
    }
   
}