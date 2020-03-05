<?php
    class Material{
        public $name = array("人参","ジャガイモ","牛肉","カレールー");
        public function __construct(){

        }

        public function addMaterial(){
            return $this->name;
        }
    }
?>