<?php  
if ($_FILES["file"]["error"] > 0)  
  {  
  echo "文件上传错误代码：".$_FILES["file"]["error"]."<br>";  
  }  
else  
  {  
  echo "上传文件为：".$_FILES["file"]["name"]."<br>";  
  echo "文件类型：".$_FILES["file"]["type"]."<br>";  
  echo "文件大小：".($_FILES["file"]["size"] / 1024)." KB<br>";  
  echo "文件临时存储在：".$_FILES["file"]["tmp_name"];  
  }  
?>  
