<?php 
include './lib/database.php';

class sanpham {
    private $db;
    function __construct($config)
    {
        $this->db = new database($config);
    }

    public function getAll() {
        $this->db->execute('select * from sanpham');
        return $this->db->getAllData();
    }
}
