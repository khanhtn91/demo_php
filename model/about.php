<?php 
class about {
    private $db;
    function __construct()
    {
        $this->db = new database();
    }

    public function getAbout() {
        $this->db->execute('select * from gioithieu limit 1');
        return $this->db->getData();
    }

    public function updateAbout($noidung) {
        $this->db->execute('update gioithieu set noidung = "' . $noidung . '" limit 1');
    }
}
