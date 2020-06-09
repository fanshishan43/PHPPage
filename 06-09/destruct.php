<?php
class Studen{
    private $name;
    public function __construct($name){
       $this->name=$name;
       echo $this->name."出生了" 
    }

    function __destruct(){
        echo $this->name.'没了';
    }
}
$stu1=new Student('tom');
$stu2=new Student('tom1');
$stu3=new Student('tom2');
/*
$stu1出生了
$stu2出生了
$stu3出生了
$stu3没了
$stu2没了
$stu1没了
*/
new Student('tom1')
new Student('tom2')
new Student('tom3')
/* 触发了:系统的垃圾回收机制，没有对象去引用他，那么new出来之后立即被销毁
tom1出生
tom1没了
tom2出生
tom2没了
tom3出生
tom3没了

*/

$stu1=new Student('tom');
$stu2=new Student('tom1');
$stu3=new Student('tom2');
unset($stu2);

/*
tom出生了
tom1出生了
tom2出生了
tom1没了
tom2没了
tom没了

*/

/*
小结:计算机分“先进先出，先进后出”
一般默认情况下都是先进后出，
但可以通过业务逻辑，实现先进先出，例如：秒杀，抢票等

*/
