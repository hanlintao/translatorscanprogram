<?php  
if ($_FILES["file"]["error"] > 0)  
  {  
  echo "文件上传错误代码：".$_FILES["file"]["error"]."<br>";  
  }  
else  
  {   
  if (file_exists("upload/".$_FILES["file"]["name"]))  
      {  
      echo $_FILES["file"]["name"] . "已经存在。";  
      }  
    else  
      {  
      move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);  
      echo "文件已上传至以下文件夹："."upload/".$_FILES["file"]["name"];  
      }  
  }  
?>
