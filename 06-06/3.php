<?php
// abstract 抽象类
   abstract class Person{
        public abstract function setinfo();//只有方法的声明，没有方法的实现可称为抽象方法
        public function getinfo(){
            echo '获取信息';
        }
    }

    // abstract 抽象类
    // new Person(); //抽象类无法被实例化

    class Student extends Person{
        public function setinfo(){
                echo '重新实现父类的抽象方法';
        }
        public function getinfo(){
            
        }
    }
    $stu =new Student();
    $stu -> setinfo();

    // 子类继承抽象类，就一定要实现父类的抽象方法

    // 抽象类的作用：
    // 1.定义命名规范，抽象类中的抽象方法被继承后一定要实现
    // 2.阻止类被实例化，如果一个类中的成员都是静态的，这时候就没有必要实例化，减少资源的占用