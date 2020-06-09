<?php
// class Person{
//     public function __construct(){
//         echo '父类哦';
//     }
// }

// class Student extends Person{
//     public function __construct(){
//         // 方法一
//         // Person::__construct();
//         // 方法二
//         parent::__construct();
//         echo '子类';

//     }
// }

// $stu=new Student;


class Person{
    protected $name;
    protected $sex;
    public function __construct($name,$sex){
        $this->name=$name;
        $this->sex=$sex;
    }

}

class Student extends Person{
    public $age;
    public function __construct($name,$sex,$age){
        parent:: __construct($name,$sex); //构造方法里面带有父类的实参
        $this->age=$age;

    }
    public function num(){
        echo '姓名'.$this->name;
        echo '年龄'.$this->sex;
        echo '性别'.$this->age;
    }
}

$stu =new Student('tom','男',12);
$stu ->num();

// 小结
/*
1.php不可以多重继承，因为多重继承容易产生二义性 接口类就可以多重继承(后面会说)
2.如果形成继承链的话，就可以，例如 A继承B，C继承A 这样就可以

*/