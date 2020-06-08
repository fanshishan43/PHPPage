<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
body{
        text-align:center;
        font-size:20px;
    }
    span{
        width:30px;
        height:10px;
        display:inline-block;
    }
</style>

<body>
    <?php
    for($i=1;$i<=10;$i++){
        for($j=1;$j<=10;$j++){
            if($i>=3 && $i<=8 && $j>=3 && $j<=8)
                echo '<span></span>';
            else
                echo "<span>*</span>";
        }
        echo '<br>';
    }
   
    
    ?>
</body>
</html>