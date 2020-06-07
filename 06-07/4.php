<?php
// 方法绑定
// 作用:将方法绑定到对象上,并调用
// 语法：
// 闭包->call(对象):将闭包绑定到对象上
// 在PHP中 匿名函数被称为闭包

例题:

$lang='ch';
class Student{

}
// 匿名函数
if($lang == 'ch'){
    $fun=function(){
        echo '我是你爸爸';
    };
}else{
    $fun=function(){
    echo '我是你儿子';
    };
}

// 绑定
$stu=new Student();
$fun->call($stu); 