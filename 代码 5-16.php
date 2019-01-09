<?php  
$zh_CN = $_POST["zh_CN"];  
$en_US = $_POST["en_US"];  
  
include "shared/conn.php";  
  
$sql = "INSERT INTO termdata(zh_CN,en_US) VALUES('$zh_CN','$en_US')";  
  
mysqli_select_db( $conn,"myterm" );  
mysqli_query($conn,"set names 'utf8'");               
$insert = mysqli_query($conn,$sql);  
  
if(!$insert)  
    {  
        echo "无法插入术语数据: ".mysqli_error($conn);  
    }  
    else  
    {  
        echo "术语数据插入成功！"."<br>";  
    }  
mysqli_close($conn);  
?>  