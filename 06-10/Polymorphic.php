<?php

/*
多态分为:方法重写和方法重载
    子类重写父类的方法，必须方法名相同，参数个数相同 
    注意:重写方法的修饰符不能比父类 还严格，private > protected >public


    方法的重载:在同一个类中有多个重名方法,方法名相同,参数个数不同来区分不同的方法
    但php不支持方法的重载,但可以使用其他方法实现

    私有属性可以被继承，但不能被重写(覆盖)
    */

/*  static 静态修饰符
    static 修饰的属性是静态属性，修饰的方法是静态方法
    静态成员，内存中就只有一份
    静态成员的调用: 类名:: 变量名 类名:: 方法名()

*/

// 方法的重写
// class Person {
//     public $name;
//     protected function say($name){
//         echo $name.'说他是猪';
//     }
// }

// class Student extends Person{
//     public function say($sex){
//         echo '他说他是'.$sex;
//     }
// }

// $stu=new Student();
// $stu -> say('男');

//static 修饰符
class Person{
   public static $name=1;
   static function  num(){
      echo Person::$name++;
   }
}
$per=new Person;

$per ->num();//1
$per ->num();//2
$per ->num();//3
$per ->num();//4
echo Person :: $name;//5
echo Person :: $name;//5