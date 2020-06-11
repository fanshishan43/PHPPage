<?php

// 加载不规则类
spl_autoload_register(function($calss_name){
    $arr=[
        'Goods'=>'./aa/Goods.class.php',
        'Book' => './bb/Book.class.php',
        'Phone'=>'./cc/Phone.class.php'
    ];
    if(isset($arr[$calss_name])){
        require $arr[$calss_name];
    }
});

$book=new Book();
$book->setName('面向对象编程');
$phone=new Phone();
$phone->setName('苹果6s');
$book->getName();
$phone->getName();

/*
总结: 将所需加载类的文件压入数组里，
在用过if判断，将需加载类的名字与数组下标做对比，找到需要加载的类

*/