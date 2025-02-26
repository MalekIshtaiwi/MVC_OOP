<?php
require_once 'config/DataBase.php';

class Product{
    private $db;

    public function __construct(){
        $this->db = DataBase::getInstance('orange_store');
    }

    public function getProducts(){
        $products = $this->db->query('SELECT * FROM products');
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
}

?>