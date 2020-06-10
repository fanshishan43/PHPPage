<?php
// 闭包 方法绑定
$lang='ch';

class Student{
    function test(){

    }
}

if($lang='ch'){
    $fun=function(){
        echo '说中文';
    };
}else{
    $fun=function(){
        echo '说外语';
    };
}

$stu=new Student;

$fun ->call($stu);

// 方法绑定
// 作用:将方法绑定到对象上，调用
// 语法：
// 闭包 ->clss(对象)：将闭包绑定到对象上
// 在php中 匿名函数被称为闭包
// 闭包 -> call(对象) : 闭包:匿名函数  对象: 对象

// 匿名函数: $fun =function(){ };  //闭包

$num=123;

class Person{

}

if($num=12){
    $test=function(){
        echo 1111;
    };
}else{
    $test=function(){
        echo 222;
    };
}

$Per=new Person;
$test ->call($Per);

// 