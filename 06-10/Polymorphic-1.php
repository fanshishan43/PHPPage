<?php
// static 修饰符
class Person{
    public static $name=1;
    public  function Student(){
        echo Person::$name++; //static属性调用 类名::变量(方法名) Person :: $name
    }
}

$per=new Person;
$per->Student();
$per->Student();
$per->Student();
$per->Student();
$per->Student();