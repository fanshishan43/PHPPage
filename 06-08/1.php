
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    body{
        text-align:center;
        font-size:25px;
    }
    span{
        width:30px;
        height:10px;
        display:inline-block;
    }
    </style>
</head>
<body>
<?php
    for($i=1;$i<=9;$i++){
        $n=$i>5?10-$i : $i;//每行规律 1 2 3 4 5 4 3 2 1
        
        $k=2*$n-1; //星星的个数
        for($j=1;$j<=$k;$j++){
            echo '<span>*</span>';
        }
        echo '<br>';
    }
?>
</body>
</html>