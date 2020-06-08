<?php
// 匿名类
$stu = new class{
    public $name="李四";
    public function __construct(){
        echo '构造函数';
    }
};
echo $stu->name;

// 匿名函数 类名 = new class() 好像匿名函数生成只能使用class做类名
// 好处，如果类只被实例化一次，就可以使用匿名类来代替，实例化完毕后就回收了类的空间(可以直接销毁) unset()