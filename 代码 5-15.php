<?php  
$zh_CN = $_POST["zh_CN"];  
$en_US = $_POST["en_US"];  
  
include "shared/conn.php";  
  
$sql_en = "INSERT INTO termdata(en_US) VALUES('$en_US') ";  
$sql_zh = "INSERT INTO termdata(zh_CN) VALUES('$zh_CN') ";  
  
mysqli_select_db( $conn,"myterm" );  
mysqli_query($conn,"set names 'utf8'");               
$insert_en = mysqli_query( $conn, $sql_en );  
$insert_zh = mysqli_query( $conn, $sql_zh );  
  
if(!$insert_zh )  
    {  
        echo "无法插入中文数据: ".mysqli_error($conn);  
    }  
    else  
    {  
        echo "中文数据插入成功！"."<br>";  
    }  
if(!$insert_en )  
    {  
        echo "无法插入英文数据: ".mysqli_error($conn);  
    }  
    else  
    {  
        echo "英文数据插入成功！"."<br>";  
    }  
mysqli_close($conn);  
?>  
