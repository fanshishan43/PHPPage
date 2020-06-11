<?php
class cesi{
    private static $name;

    private function __construct(){

    }

    private function __clone(){

    }

    public function getInfo(){
        if(!self::$name instanceof self){
            self::$name =new self();
            return self::$name;
        }
    }

    function test(){
        echo 1111;
    }

    function cehsi(){
        echo 111112321321312;
    }
}

$DB=cesi::getInfo();
$DB ->test();
$DB ->cehsi();