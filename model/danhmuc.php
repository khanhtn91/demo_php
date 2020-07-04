<?php 

class danhmuc {
    private $db;
    function __construct()
    {
        $this->db = new database();
    }

    public function getDanhmuc1() {
        $this->db->execute('select * from danhmuc1');
        return $this->db->getAllData();
    }

    public function getDanhmuc2($danhmuc1) {
        $this->db->execute('select * from danhmuc2 where id_danhmuc1 = '. $danhmuc1);
        return $this->db->getAllData();
    }

    public function getDanhmuc() {
        $this->db->execute('select dm1.id as id1, dm2.id as id2, dm1.ten as tendm1, dm2.ten as tendm2 from danhmuc1 as dm1 left join danhmuc2 as dm2 on dm1.id = dm2.id_danhmuc1');
        return $this->db->getAllData();
    }

    public function getDetailDanhmuc($idDanhmuc1, $idDanhmuc2) {
        $where = ' where';
        if ($idDanhmuc1 > 0) {
            $where .= ' dm1.id = '. $idDanhmuc1;
        }
        if ($idDanhmuc2 > 0) {
            $where .= ' and dm2.id = '. $idDanhmuc2;
        }
        $this->db->execute('select dm1.id as id1, dm2.id as id2, dm1.ten as tendm1, dm2.ten as tendm2 from danhmuc1 as dm1 left join danhmuc2 as dm2 on dm1.id = dm2.id_danhmuc1 ' . $where);
        return $this->db->getData();
    }
}
