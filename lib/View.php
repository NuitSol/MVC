<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 16:48
 */
namespace lib;

class View {
    protected $file;
    public $vars = array();

    public function assign($name, $value){
        $this->vars[$name] = $value;
    }

    public function setFile($file){
        $this->file = $file;
    }

    public function show(){
        extract($this->vars);
        include_once $this->file;
    }
}