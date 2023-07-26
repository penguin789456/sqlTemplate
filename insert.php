<?php
    $id=$_POST["ID"];
    $attribute=$_POST["Attribute"];
    $price=$_POST["Price"];
    $time=$_POST["time"];
    $link=mysqli_connect( 'localhost', // MySQL主機名稱
    'root', // 使用者名稱 
    '11010112', // 密碼 
    'supermarket');
    $sql = "INSERT INTO product values('".$id."','".$attribute."','".$price."','".$time."')";
    echo $sql;
    if ( $result = mysqli_query($link, $sql) ) { 
        echo "建立成功";
    }
    $sql = "SELECT pID from product";
    if ( $result = mysqli_query($link, $sql) ) { 
        echo "se suc";
    }
    mysqli_close($link);
?>
