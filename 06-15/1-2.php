<?php
// 工厂函数
// 传递不同的参数获得不同的方法
class Create1{

}

class Create2{
        public $name;
        function test(){
         echo $this->name;
        }

     
}

class Create3{
        function show($num){
            switch ($num) {
                case 1:
                        return new Create1;
                    break;
                    case 2:
                        return new Create2;
                    break;
                
                default:
                    return null;
                    break;
            }
        }
}

$sce=new Create3;
$obj=$sce->show(2);
$obj->name='tom'; //调用到了create2的name属性
$obj ->test(); //调用到了create2的test()方法