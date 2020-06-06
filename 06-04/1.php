<?php
/*
多态分为:方法重写和方法重载。
    子类重写父类的方法，必须方法名相同，参数相同，方法的类型也要相同(public private protected)
    注意：重写方法的修饰符不能比父类还严格 private > protected >public2

    方法的重载：在同一个类中有多个重名方法 方法名相同,参数个数不同来区分不同的方法 
    PHP不支持方法的重载，但可以使用其他方式实现
*/

/*
 私有属性可以被继承，但不能被重写(覆盖)


*/

/*

static 静态的
static修饰的属性叫静态属性，static修饰的方法叫静态方法
静态成员，内存中就一份
静态方法的调用:类名::属性(变量名)  类目::方法名()

*/

class Person{
   public static $name=10;
    function num(){
      echo Person::$name++;
    }
}
echo Person::$name;
  $stu=new Person;
  $stu ->num();//10
  $stu ->num();//11
  $stu ->num();//12
  $stu ->num();//13
  $stu ->num();//14
  $stu ->num();//15
