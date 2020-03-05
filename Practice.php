<?php

class Practice {

    public $subject = "体調について";
    public $name = "daiki nakamura";
    public $contents = "体調は良好";

    public function __construct(){
       
    }

    public function dispArtcile(){
        print ("件名:".$this->subject."\n");
        print ("名前:".$this->name."\n");
        print("内容:".$this->contents."\n");
        echo $name;
    }
}
?>