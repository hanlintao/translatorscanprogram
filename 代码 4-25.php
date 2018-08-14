<!DOCTYPE html>  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>STITERM</title>  
</head>  
<body>  
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
  
    mysqli_select_db( $conn,"stiterm" );  
    $sql = "SELECT ID, zh_CN, en_US FROM termdata";  
    mysqli_query($conn,"set names 'utf8'");  
    $getterm = mysqli_query($conn,$sql);  
    // print_r($getterm);
    if(! $getterm )  
        {  
            echo "无法获取术语数据，请检查问题";  
        }  
    else  
        {  
            while ($row = mysqli_fetch_array($getterm, MYSQLI_ASSOC))  
              
            {  
                echo "序号:{$row["ID"]}"."<br>";  
                echo "中文:{$row["zh_CN"]}"."<br>";  
                echo "英文:{$row["en_US"]}"."<br>";  
            }  
          
        }   
    
    mysqli_close($conn);  
?>  
</body>  
</html> 
