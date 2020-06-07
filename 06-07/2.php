<?php
interface Ip1{
    function fun1();
}
interface Ip2{
    function fun2();
}

// 接口允许多重实现
class Student implements Ip1, Ip2{
    function fun1(){

    }
    function fun2(){

    }
}


// 注意，在接口的多重实现中，如果有同名的方法，只要实现一次即可
// 类可以继承的同时实现接口
class Student extends Person implements Ip1,Ip2{
    
}
