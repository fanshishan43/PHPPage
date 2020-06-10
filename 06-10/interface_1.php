<?php
interface P1{
    function num1();
}

interface P2{
    function num2();
}

class Person{

}

// 接口类可以被多重继承
// class Student implements P1,P2{
//     function num1(){

//     }

//     function num2(){

//     }
// }

// $stu =new Student;

// 继承的同时，实现接口类 
class Student extends Person implements P1,P2{
            function num1(){

             }
                
            function num2(){
                
             }
}

// 注意:在接口的多重继承中，如果有同名方法，只要实现一次就可以了