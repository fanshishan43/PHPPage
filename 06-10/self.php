<?php
// 关键字 self表示当前类的名字
/*    class Student{
        public static $num=1;
        function __construct(){
                self::$num++;
        }
        function Num(){
            echo self::$num;
        }

        function __destruct(){
            echo self::$num.'没了';
        }
    }

    $stu =new Student;
    $stu->Num();
    $stu->Num();
*/

// 静态对象继承
class Person{
    public static $add='中国';
    public  function  show(){
        echo self::$add;
    }
}

// 继承静态类
    class Student extends Person{
        public static $add='北京';
            public  function  show2(){
                echo self::$add;
                // echo static::$add; //表当前类
            }
    }

    $stu =new Student;
    $stu->show(); //中国 (变量没有被重载)
    $stu->show2();//北京

    // static 有两个作用，第一个表示静态类，第二个表示当前类