<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    年龄:<input type="text" name="age"/>
    <input type="submit" value="点击" name="btn">
    </form>
</body>
</html>

<?php

if(isset($_POST['btn'])){
   
        try {
            $age=$_POST['age'];
            if($age == ''){
                throw new Exception('内容不能为空',1001);
            }else if(!is_numeric($age)){
                throw new Exception('内容必须是数字',1002);
            }else if(!($age >=10 && $age<=30)){
                throw new Exception('年龄必须在10-30之间',1003);
            }else{
                echo '你的年龄是:'.$age;
            }
        } catch (Exception $th) {
            echo '错误信息:'.$th->getMessage().'<br>';
            echo '错误代码:'.$th->getCode().'<br>';
            echo '错误文件:'.$th->getFile().'<br>';
            echo '错误行数:'.$th->getLine().'<br>';  
        }   
}

/*
异常处理，
try{

}catch(){
    
}

*/