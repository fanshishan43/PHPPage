<?php
// 遍历对象
class Student{
    public $name='tom';
    protected $sex='男';
    private $age=20;

    public function show(){ //遍历对象，可以将遍历方法写入到公共方法中,然后在外部调用方法
        foreach($this as $k => $v){ //$this 表示当前类
            echo $k.'=====>>'.$v.'<br>';
        }
    }
}

$stu =new Student;
foreach($stu as $k => $v){
    echo $k.'=====>>'.$v;
}
echo '<br>';
$stu ->show();