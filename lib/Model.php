<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 18:11
 */

namespace lib;


class Model {
    protected $db;

    public function __construct($db){
        $this->db = $db;
    }

}