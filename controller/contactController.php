<?php
include './model/lienhe.php';
include_once './services/sendMail.php';

class contactController {
    public function indexAction() {
        return [
            'view' => 'contact'
        ];
    }
    public function saveAction() {
        $model = new lienhe();
        $data['email'] = $_POST['email'];
        $data['ten'] = $_POST['ten'];
        $data['noidung'] = $_POST['noidung'];
        $data = $model->insert($data);
        sendMailContact();
        return [
            'view' => 'contactSuccess'
        ];
    }

    public function saveAjaxAction() {
        $model = new lienhe();
        $data['email'] = $_POST['email'];
        $data['ten'] = $_POST['ten'];
        $data['noidung'] = $_POST['noidung'];
        $data = $model->insert($data);
        sendMailContact();
        echo '<h1>Thanh Cong</h1>';
    }

    public function ajaxAction() {
        echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/0MrE4c9rW0w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
}