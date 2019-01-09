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
      $file_name = "upload/" . $_FILES["file"]["name"];  
      include "Classes/PHPExcel.php";  
      $excel = PHPExcel_IOFactory::load($file_name);  
      $sheetCount = $excel->getSheetCount();  
      for($i=0;$i<$sheetCount;$i++)  
        {  
          $data = $excel->getSheet($i)->toArray();  
          for($j=1;$j<count($data);$j++)  
            {  
                $ID = $data[$j][0];   
                $zh_CN = $data[$j][1];   
                $en_US = $data[$j][2];   
                echo $ID." ".$zh_CN." ".$en_US."<br>";  
            }  
        }  
      }  
  }  
?>  