<?php 
class sanpham {
    private $db;
    function __construct()
    {
        $this->db = new database();
    }

    public function getAll() {
        $this->db->execute('select * from sanpham');
        return $this->db->getAllData();
    }

    public function totalData() {
        $this->db->execute('select count(id) as total from sanpham');
        return $this->db->getData();
    }

    public function page($pageNum = 1, $item = 1, $keyword = '') {
        $item = $item < 1 ? 1 : $item;
        if ($pageNum < 1) {
            $pageNum = 1;
        }
        $start = ($pageNum - 1) * $item;
        if ($keyword) {
            $where = 'where ten like "%'.$keyword.'%"';
        } else {
            $where = '';
        }
        $this->db->execute('select * from sanpham '.$where.' limit '.$start .','.$item);
        return $this->db->getAllData();
    }

    public function search($keyword = '') {
       
        if ($keyword) {
            $where = 'where ten like "%'.$keyword.'%"';
        } else {
            $where = '';
        }
        $this->db->execute('select * from sanpham '.$where);
        return $this->db->getAllData();
    }

    public function getDetail($id) {
        $this->db->execute('select * from sanpham where id = '. $id);
        return $this->db->getData();
    }

    public function getproductByCategory($idDanhmuc1, $idDanhmuc2 = 0) {

        $where = ' where';
        if ($idDanhmuc1 > 0) {
            $where .= ' id_danhmuc1 = '. $idDanhmuc1;
        }
        if ($idDanhmuc2 > 0) {
            $where .= ' and id_danhmuc2 = '. $idDanhmuc2;
        }
        $this->db->execute('select * from sanpham '. $where);
        return $this->db->getAllData();
    }
}
