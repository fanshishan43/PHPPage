<?php
// 魔术方法模拟方法重载
class Math{
    public function __call($fn_name,$fn_args){
        $sum=0;
        foreach($fn_args as $k=>$v){
            $sum+=$v; //0+=10,10+=20  30
        }

        echo implode(',',$fn_args).'的和是:'.$sum.'<br>';
    }
}
// 利用魔术方法__call()模拟方法重载
$math=new Math;
$math ->call(10,20);
$math ->call(10,20,30);
$math ->call(10,20,30,40);