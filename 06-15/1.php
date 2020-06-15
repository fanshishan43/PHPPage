<?php
// 工厂函数
// 传递不同的参数获得不同的对象

class ProdyctsA{

}

class ProdyctsB{

}
// 工厂模式
class Factory{
    public function create($num){
        switch($num){
            case 1:
                return new ProdyctsA;
                case 2:
                    return new Prodyctsb;
                    default:
                    return null;
                
        }
    }
}

$Factory =new Factory;
$obj1 =$Factory ->create(1);
$obj2 =$Factory ->create(2);

var_dump($obj1,$obj2);
