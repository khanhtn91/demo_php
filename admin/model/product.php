<?php
class product
{
    private $db;
    function __construct()
    {
        $this->db = new database();
    }

    function getProduct()
    {
        $this->db->execute('select * from sanpham');
        $products = $this->db->getAllData();
        return $products;
    }
}