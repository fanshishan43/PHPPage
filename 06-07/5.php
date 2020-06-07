<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
年龄:   <input type="text" name="age">
<input type="submit" value="点击" name="buttom">
</form>
</body>
</html>
<?php
   if(isset($_POST['buttom'])){
    try{
        $age=$_POST['age'];
     
        if($age == '')
            throw new Exception('年龄不能为空',1000);

            if(!is_numeric($age))
            throw new Exception('年龄必须是数字',1001);


            if(!($age >=10 && $age<=30))
                throw new Exception('年龄必须在10-30之间',1002);
             echo '你的年龄合适';
            
        
    }catch(Exception $ex){
        echo '错误信息:'.$ex->getMessage().'<br>';
        echo '错误码:'.$ex->getCode().'<br>';
        echo '文件地址:'.$ex->getFile().'<br>';
        echo '错误行号:'.$ex->getLine().'<br>';
    }
}

?>

