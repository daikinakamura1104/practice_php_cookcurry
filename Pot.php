<?php
    class Pot{
        public $name = "土鍋";
        public $firelevel = "強火";
        public $stewtime =  30;

        public function __construct(){

        }

        public function getName(){
            return $this->name;
        }

        public function getFireLevel(){
            return $this->firelevel;
        }

        public function getStewtime(){
            return $this->stewtime;
        }
    }
?>