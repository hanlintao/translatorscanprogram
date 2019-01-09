<?php  
include("shared/conn.php");  
mysqli_select_db( $conn,"myterm" );  
mysqli_query($conn,"set names 'utf8'");  
  
session_start();  
$user_check=$_SESSION["username"];  
$user_check_sql="SELECT * FROM user WHERE username='{$user_check}'";  
$user_check_result=mysqli_query($conn,$user_check_sql);  
$row=mysqli_fetch_array($user_check_result,MYSQLI_ASSOC);  
$login_session=$row["username"];  
  
if(!isset($login_session))  
{  
    header("Location: login.php");  
}  
?>  