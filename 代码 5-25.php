<?php  
$zh_CN = $_POST["zh_CN"];  
$en_US = $_POST["en_US"];  
$tid = $_POST["ID"];  
include "shared/conn.php";  
$sql = "UPDATE termdata SET zh_CN='{$zh_CN}',en_US='{$en_US}' WHERE ID='{$tid}'";  
mysqli_select_db( $conn,"myterm" );  
mysqli_query($conn,"set names 'utf8'");               
$update = mysqli_query($conn,$sql);  
if($update)  
    {  
        echo "<script>alert('术语更新成功！')</script>";  
    }  
    else  
    {  
        echo "<script>alert('术语更新失败')</script>";  
    }  
echo "<script>location='display.php'</script>";  
mysqli_close($conn);  
?> 