<?php
namespace shop\models;
use shop\db\Db;
//require_once 'db/Db.php';

class Product
{
    public function getProducts()
    {
        $sql = "SELECT `title` FROM `product`";
        return Db::getConnection()->query($sql)->fetchAll();
    }
}
