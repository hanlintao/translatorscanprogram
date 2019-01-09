<?php  
function excelcount($text){  
    echo "该Excel文件内待统计文本为：".$text."<br>";  
    echo "该Excel文件的字数统计结果：";  
}  
  
$source = "字数统计对译者很重要";  
excelcount($source);  
?>  