<?php
// 空值异常
class MyNullException extends Exception{

}
// 范围异常
class MyRangeException extends Exception{

}


if(isset($_POST['button'])){
    $age=$_POST['age'];
    try{
        if($age == '')
        throw new MyNullException('年龄不能为空',1001);

        if(!($age>=10 && $age<=30))
        throw new MyRangeException('年龄仅限10-30之间',1002);
        echo '年龄合适';
    }catch(MyNullException $ex){
        echo '空值异常';
        echo '错误信息:'. $ex -> getMessage();
        echo '错误代码:'. $ex -> getCode ();
    }catch(MyRangeException $ex){
            echo '范围异常';
            echo '错误信息:'. $ex -> getMessage ();
            echo '错误代码:'. $ex -> getCode ();
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
        年龄: <input type="text" name="age" >
        <input type="submit" value="点击" name="button">
        </form>
</body>
</html>