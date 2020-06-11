<?php
// __autoload() 自动加载未定义的类

function __autoload($class_name){ //自动加载类，加载引用文件时使用(类名要跟文件名相同，适合一个文件一个类的模式，7.2之后不支持了)
    require $class_name.'.class.php';
}
$test=new test;
$test ->show();

$ceshi =new ceshi;
$ceshi ->say();