<!DOCTYPE html>  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>STITERM</title>  
</head>  
<body>  
  
<table width="89%" border="1">  
  <tbody>  
    <tr>  
      <td width="21%">  
        <p><strong>序号</strong></p>  
      </td>  
      <td width="31%">  
        <p><strong>中文</strong></p>  
      </td>  
      <td width="46%">  
        <p><strong>英文</strong></p>  
      </td>  
    </tr>  
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
    $query =$_POST["query"]; 
    $sql = "SELECT ID, zh_CN, en_US FROM termdata WHERE zh_CN LIKE '%$query%' OR en_US LIKE '%$query%'";  
    mysqli_query($conn,"set names 'utf8'");  
    $getterm = mysqli_query($conn,$sql);  
    
    if(! $getterm )  
        {  
            echo "无法获取术语数据，请检查问题";  
        }  
    else  
        {  
            while ($row = mysqli_fetch_array($getterm, MYSQLI_ASSOC))  
              
            {  
                echo "<tr>  
                        <td width='21%'>  
                        <p>{$row["ID"]}</p>  
                        </td>  
                        <td width='31%'>  
                        <p>{$row["zh_CN"]}</p>  
                        </td>  
                        <td width='46%'>  
                        <p>{$row["en_US"]}</p>  
                        </td>  
                      </tr>";  
            }  
          
        }   
    
    mysqli_close($conn);  
?>  
  </tbody>  
</table>  
</body>  
</html> 

 
