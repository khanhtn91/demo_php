<?php
include './model/sanpham.php';
class indexController {
    private $config;
    function __construct($config)
    {
        $this->config = $config;
    }
    public function indexAction() {
        $model = new sanpham($this->config);
        $data = $model->getAll();
        return [
            'view' => 'index',
            'data' => $data
        ];
    }
}