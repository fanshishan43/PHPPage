<?php
class Student{
    public $name;
    private $sex;
    protected $age;

    function __construct($name,$sex,$age){
        $this ->name=$name;
        $this -> sex=$sex;
        $this -> age=$age;
    }
}

// 测试

// 序列化
// $stu =new Student('tom','男','测试');
// $str=serialize($stu);
// file_put_contents('./2.txt',$str);

// 反序列化,类的反序列化必须要有类的参与
$file=file_get_contents('./2.txt');
$str=unserialize($file);
var_dump($str);
