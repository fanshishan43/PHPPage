<?php
// 接口类 interface
/*
1.如果一个类中的所有方法都是抽象方法，那么这个类可以写成接口类
2.接口是一个特殊的抽象类，接口中只能有抽象方法和常量
3.接口中的抽象方法只能是public 可以省略，默认也是public
4.通过implements关键字来实现接口
5.不能使用abstract和final来修饰接口中的抽象方法
*/
interface Student{
    const add='学生';
    function fun1();
    function fun2();
}

class Person implements Student{
    public function fun1(){
        echo '1111';
    }
    public function fun2(){
        echo 2222;
    }

}

// 访问接口中的常量
echo Person::add;