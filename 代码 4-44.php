<?php  
   $dbhost = "localhost";  //数据库所在主机地址  
   $dbuser = "root";      //登录数据库所用的用户名  
   $dbpass = ""; //登录数据库所用的用户名密码  
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);  
     
   if(!$conn )  
   {  
     die("无法连接服务器，错误代码为： " . mysqli_connect_error());  
   }  
//     else  
//   {  
//     echo "服务器连接成功！";  
//   }  
?> 