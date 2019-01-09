<?php   
include "shared/conn.php";  
mysqli_select_db($conn,"myterm");  
mysqli_query($conn,"set names 'utf8'");  
  
$tid=$_GET["tid"];  
$sql_delete="DELETE FROM termdata WHERE ID ={$tid}";  
  
if(mysqli_query($conn,$sql_delete))  
{  
    echo "<script>alert('删除成功！')</script>";   
}  
else  
{  
    echo "<script>alert('删除失败！')</script>";  
}  
  
echo "<script>location='display.php'</script>";  
?>  
