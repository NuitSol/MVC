<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 18:12
 */

namespace model;

use lib\Model;


class UserModel extends Model
{
    public function fetchAll(){
        return array(1,2,3);
    }
}