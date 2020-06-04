<?php
/*继承中的构造方法
    class Person{
        public function __construct(){
            echo '这是父类<br>';
        }
    }

    class Student extends Person{
        public function __construct(){
            // 第一种 调用父类构造方法
            // Person::__construct();
            parent::__construct();
            echo '这是子类';
        }
    }
    new Student;
*/

class Person{
    protected $name;
    protected $sex;
    public function __construct($name,$sex){
        $this->name=$name;
        $this->sex=$sex;
    }
}

class Student extends Person{
    private $soure;
    public function __construct($name,$sex,$soure){
        parent::__construct($name,$sex);//调用父类的构造函数并传递参数
        $this->soure=$soure;
    }
    public function getNum(){
        echo '姓名:'.$this->name;
        echo '年龄:'.$this->sex;
        echo '成绩:'.$this -> soure;
    }
}

$stu=new Student('tom','男',85);
$stu->getNum();