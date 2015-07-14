<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 16:38
 */
function __autoload($class){
    require str_replace('\\', '/', $class) . '.php';
}

use lib\App;

$app = new App();
$app->run();