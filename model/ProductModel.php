<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 18:30
 */
namespace model;

use lib\Model;


class ProductModel extends Model
{
    public function getProduct($id){
        $dr = $this->db->query("select * from refund");
        while($row = $dr->fetch_assoc()) var_dump($row);
        return($this->db->query("select * from refund"));
        $a = array(1,2,3);
        return $a[$id];
    }

    public function getProducts()
    {
        return array('phone', 'comp');
    }
}