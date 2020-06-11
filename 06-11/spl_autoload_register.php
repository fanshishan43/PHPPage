<?php
// spl_autoload_register()  自动加载类 (替换原来的 __autoload() 方法)

  

// 方法一： 写个自定义函数，将函数名传入spl_autoload_register('自定义函数名')
 /*   function my_autoload($class_name){
        require $class_name.'.class.php';
    }
    spl_autoload_register('my_autoload');
*/

// 方法二: 通过匿名函数 调用自动加载类 (5.1之后可以使用)
spl_autoload_register(function($class){
    require $class.'.class.php';
});

$test=new test;
$test ->show();

$ceshi =new ceshi;
$ceshi ->say();