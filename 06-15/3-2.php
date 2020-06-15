<?php
// serialize() 序列化

// unserialize()反序列化


$stu=['测试','哈哈','喜喜','无语'];
$str=serialize($stu);
$stu1=unserialize($str);
// echo $str;
// $im=implode(',',$stu1);
// $ex=explode(',',$im);
// print_r($ex);
print_r($stu1);