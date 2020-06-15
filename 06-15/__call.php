<?php
// __call() 调用无法访问的方法时自动执行 
/*两个参数，
第一个是方法名 $fn_name
，第二个是参数数组 $fn_args
*/

// __callstatic()：调用无法访问的静态方法是自动调用
class Student{
    public function __call($fn_name,$fn_args){
        echo "{$fn_name}不存在";
        '参数：'.print_r($fn_args);
    }

    // 调用无法访问的静态方法时自动调用
    public static function __callstatic($fn_name,$fn_args){
        echo "调用静态方法${fn_name}不存在";
    }
}
$stu =new Student;
$stu ->show(1,2).'<br>';

Student::show();