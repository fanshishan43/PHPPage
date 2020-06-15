<?php
// 操作私有属性
// __set($k,$v):给无法访问的属性赋值的时候自动调用 (只写)
// __get($k):获取无法访问的属性值时自动调用     (只读) 
// __isset($k):判断无法访问的属性是否存在时自动调用
class Student{
    private $name;
    private $sex;
    private $age;

    public function __set($k,$v){ //类似于只写(在数组里才可以写)
        if(in_array($k,array('name','age')))
      $this ->$k=$v;
    //   外部调用: $stu ->sex ='男' sex =$k ,'男'=$v  数组的键和值
    else 
    echo "{$k}是不可写<br>";
    }

    public function __get($k){ //类似与只读
        // 获取无法访问的属性值时自动调用
        if(in_array($k,array('name','sex'))) //在数组里，才可以访问
        return $this->$k; //参考__set的参数$k;
        else
        echo "{$k}是只读属性<br>";
    }

     // 判断无法访问的属性是否存在时自动调用
    public function __isset($K){
        return isset($this->$K);
    }

    // 销毁无法访问的属性时自动调用
    public function __unset($k){
        unset($this->$k);
    }
}

// 测试
$stu =new Student;
$stu ->sex='tom';
$stu ->name='系';
$stu ->age=28;
echo '姓名是：'.$stu ->sex; //调用了__set()函数 不在数组内，无法赋值 
echo '名字是：'.$stu ->name; //调用了__set()和__get()函数  在数组内 可以赋值可以访问
echo '年龄：'.$stu ->age; //调用了__set()函数  在数组内 可以赋值 但不在__get()函数里，无法读取
// print_r($stu);
// var_dump(isset($stu ->name));
unset($stu->name);
print_r($stu);