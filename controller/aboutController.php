<?php
include './model/about.php';
class aboutController {
    public function indexAction() {
        $model = new about();
        $data = $model->getAbout();
        $data['noidung'] = str_replace('&lt;', '<', $data['noidung']);
        $data['noidung'] = str_replace('&gt;', '>', $data['noidung']);
        return [
            'view' => 'about',
            'data' => $data,
        ];
    }

    public function editAction() {
        $model = new about();
        
        if ($_POST['noidung']) {
            $noidung = addslashes($_POST['noidung']);
            $model->updateAbout($noidung);
        }
        $data = $model->getAbout();
        
        return [
            'view' => 'updateAbout',
            'data' => $data,
        ];
    }
}