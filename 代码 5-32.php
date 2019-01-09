<!DOCTYPE html>  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>MyTerm</title>  
</head>  
<body>  
<table width="100%" border="1">  
  <tbody>  
    <tr>  
      <td width="10%">  
      <a href="index.php">检索术语</a>  
      </td>  
      <td width="10%">  
      <a href="display.php">查看术语</a>  
      </td>  
      <td width="10%">  
      <a href="insert.php">添加术语</a>  
      </td>  
      <td width="10%">  
      <?php echo "欢迎 ".$_SESSION["username"];?>  
      </td>  
      <td width="10%">  
      <a href="logout.php">退出</a>  
      </td>  
    </tr>  
  </tbody>  