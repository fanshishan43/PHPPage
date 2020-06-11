<?php
// 空值异常
class NullException extends Exception{

}
// 范围异常
class MyRangeException extends Exception{

}

// 类型异常
class TypeException extends Exception{

}

// 自定义范围异常
class MyException extends Exception{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
        年龄: <input type="text" name="age" >
        <input type="submit" value="点击" name="btn">
</form>
</body>
</html>

<?php
    if(isset($_POST['btn'])){
        $age =$_POST['age'];
        try {
            if(empty($age)){
                throw new NullException('值不能为空',1001);
            }else if(!is_numeric($age)){
                throw new TypeException('内容必须是数字',1002);
            }else if(!($age>=10 && $age <=30)){
                    throw new MyRangeException('年龄只能是10-30之间',1003);
            }else{
                echo '你的年龄是：'.$age;
            }
        } catch (NullException $nu) {
                echo '错误信息：'.$nu->getMessage();
                echo '错误代码：'.$nu->getCode();
                echo '错误行数：'.$nu->getLine();
        }catch(TypeException $number){
            echo '错误信息：'.$number->getMessage();
            echo '错误代码：'.$number->getCode();
            echo '错误行数：'.$number->getLine();
        }catch(MyRangeException $range){
            echo '错误信息:'.$range->getMessage().'<br>';
            echo '错误行数：'.$range->getLine().'<br>';
            echo '信息更改:'.$age='15'.'信息更改为系统默认年龄'.'<br>';
        }
    }


