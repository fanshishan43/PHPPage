<?php
class Student{
    // 把对象当成字符串使用的时候在，自动调用,只能用return
    public function __toString(){
        return '这是个对象，不是字符串';
    }

    // 把对象当成函数使用时，自动调用。
    public function __invoke(){
        echo '这是一个对象，不是函数';
    }
}

$stu =new Student;
echo $stu.'<br>';
$stu();


// __toString() //将对象作为字符串使用时，系统自动调用，用return

// __invoke() //将对象作为函数使用是，系统自动调用，