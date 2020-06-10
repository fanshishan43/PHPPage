<?php
// final 类
/*
被final类修饰的方法不能被重写
被final类修饰的类不能被继承

*/

/*final类修饰的方法不能被重写
    // final类修饰的方法不能被重写 (Cannot override final method Person::test() )
    class Person{
        final public function test(){
            echo '你是煞笔';
        }
    }

    class Student extends Person{
            public function test(){
                echo '你是猪';
            }
    }

    $stu =new Student;
    $stu -> test();
    */

/*final 类不能被继承
    // final类不能被继承 (Cannot declare property Person::$name final, the final modifier is allowed only for methods and classes)
    class Person{
        final public $name="李四";
    }

    class Student extends Person{
        public $name="张三";
    }

    Student::$name;
*/

// final 的作用:
// 1.如果确定一个类不能被继承，或者确定一个方法不能被重写，那么就用final修饰，提高执行率
// 2.如果一个方法不想被子类重写，那么也可以用final修饰