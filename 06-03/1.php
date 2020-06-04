<?php
/*；类的继承
    class Person{
        public function show(){
            echo '人类啊';
        }
    }

    class Student extends Person{
        public function tets(){
            // 方法一
            // $person=new Person;
            // $person -> show();
            // 方法二：
            // $this->show();
    
        }
    }

    $stu=new Student();
    $stu->tets();
    */
// protected 可在类的内部和子内中访问（整个继承链上访问）

class A{
    public function num(){
        echo $this ->num;
    }
}

class B extends A{
    protected $num=10;
}

$b=new B();
$b->num();