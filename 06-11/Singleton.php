<?php
// 单例设计模式(一个类只能创建一个对象)  ---特点：三私一共
class DB{
    // 静态的私有成员属性用来保存对象的单例
    private static $name;

    // 私有构造方法，防止类在外部被调用
    private  function __construct(){
        
    }
    // 私有的克隆方法，防止类在外部被克隆
    private  function  __clone(){

    }

    public static function getInstance(){
        if(!self::$name instanceof self){
            self::$name =new self();
            return self::$name;
        }
    }

    function test(){
        echo '喜喜';
    }

    function ceshi(){
        echo '哈哈0';
    }
}

// 测试
$dn=DB ::getInstance();
// $dn2=DB::getInstance(); //单例设计模式 一个类只能被生产一次 $dn2 实际无效...
$dn ->test();
$dn ->ceshi();
var_dump($dn,$dn2);


// 应用场景:多次请求数据库，只需要一个连接对象
