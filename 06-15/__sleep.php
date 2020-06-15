<?php
// __sleep:当序列化的时候自动调用
// __wakeup:当反序列化的时候自动调用
class Student{
    private $name;
    private $sex;
    private $add='中国';

    public  function __construct($name,$sex){
        $this->name=$name;
        $this->sex=$sex;
    }
    /**
     * 序列化的时候自动调用
     * return array 序列化需要的属性名
     *  */ 
    public function __sleep(){
            return array('name','sex');
    }

    // 反序列化的时候自动调用(可以重新赋值)
    public function __wakeup(){
      $this ->type='学生'; //添加一个学生
      $this->add='美国';//重新赋值
    }

}

$stu =new Student('tom','男');
$str=serialize($stu); //序列化
echo $str.'<br>';
$ste=unserialize($str);
print_r($ste);