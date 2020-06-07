<?php
// 自定义错误

// 自定义空异常类
class MyNullException extends Exception{

}

// 自定义类型异常
class MyTypeException extends Exception{

}

// 自定义范围异常
class MyRangeException extends Exception{

}

// 逻辑代码
if(isset($_POST['button'])){
    try{
        $name=$_POST['name'];
        $age=$_POST['age'];

        if( $name == '')
            throw new MyNullException('名字不能为空');

            if( $age== '')
                throw new MyNullException('年龄不能为空');

                if(!is_numeric($age))
                    throw new MyTypeException('年龄不是数字');
                
                if(!($age>=10 && $age<=30))
                    throw new MyRangeException('年龄必须在10-30之间');   
                    echo '年龄合适';

    }catch(MyNullException $ex){
        echo $ex->getMessage().'<br>';
        echo '轻微异常';
    }catch(MyTypeException $ex){
        echo $ex->getMessage().'<br>';
        echo '危险异常';
    }catch(MyRangeException $ex){
        echo $ex -> getMessage().'<br>';
        echo '超级异常';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    姓名:<input type="text" name="name"/><br>
    年龄:<input type="text" name="age"/><br>
        <input type="submit" value="点击" name="button">
    </form>
</body>
</html>