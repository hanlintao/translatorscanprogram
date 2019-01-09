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
					include "shared/conn.php";  
					mysqli_select_db($conn,"myterm");  
					mysqli_query($conn,"set names 'utf8'");  
					$sql = "INSERT INTO termdata(ID,zh_CN,en_US) VALUES('$ID','$zh_CN','$en_US')";  
					if(!mysqli_query($conn,$sql) )  
						{  
							echo "无法插入术语数据".mysqli_error($conn)."<br>";  
						}  
						else  
						{  
							echo "第".$ID."条术语插入成功"."<br>";  
						}  
					mysqli_close($conn);  
			}  
		}  
      }  
  }  
?>  