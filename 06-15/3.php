<?php
// 序列化，反序列号
// 数组序列号
// $stu=['tom','berry','ketty'];
// echo $str=serialize($stu); //序列号 serialize() 
// file_put_contents('./1.txt',$str);

// 数组的反序列化
$str=file_get_contents('./1.txt');
// echo $str;
$unser=unserialize($str);
print_r($unser);

// serialize() 序列化
// unserialize() 反序列化

// serialize() 序列化
// unserialize() 反序列化

// serialize() 序列化
// unserialize() 反序列化