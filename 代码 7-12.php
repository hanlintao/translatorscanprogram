<?php  
function excelcount($text){  
    return "该Excel文件内待统计文本为：".$text."<br>"."该Excel文件的字数统计结果：";  
}  
  
$text = "字数统计对译者很重要";  
echo excelcount($text);  
?>  