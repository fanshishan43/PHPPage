<?php
// 工厂函数
// 传递不同的参数获得不同的对象
class test1{
    function show2(){
        echo 111;
    }
}

class test2{

}

class ceshi{
    public function show($num){
        switch ($num) {
            case 1:
                return new test1;
                case 2:
                    return new test2;
                    default:
                    return '没了';
        }
    }
}

$stu=new ceshi;
$obj=$stu ->show(1); 
$obj ->show2(); //调用到了test1中的方法