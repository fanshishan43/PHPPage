<?php
// final 类
//  被final修饰的方法不能被重写
//  被final修饰的类不能被继承

/*final修饰的方法不能被重写
    class Person {
        // final修饰的方法不能被重写
        final public function show(){

        }
    }
    class Student extends Person{
        public function show(){

        }
    }
*/

/*final修饰的类不能被继承
    class Person {
        // final修饰的类不能被继承
            final public $name="李四";
    }
    class Student extends Person{
        public $name="王五";
    }
/*



final的作用:
1.如果确定一个类不能被继承 或者确定一个方法不能被重写，那么价格final修饰，提高执行效率
2.如果一个方法不想被子类重写，那么也可以用final修饰
