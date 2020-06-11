<?php
class DB{
    private static $name;

    private function __construct(){

    }

    private function __clone(){

    }

    public function getinf(){
        if(!self::$name instanceof self){
            self::$name=new self();
            return self::$name;
        }
    }

    function test(){
        echo 111;
    }
    function ceshi (){
        echo 222;
    }

}

$db=DB::getinf();
$db ->test();
$db ->ceshi();