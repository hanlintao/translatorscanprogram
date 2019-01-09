<?php  
$text=$_POST["text"];  
$english_punc_chinese = "/([A-Za-z0-9])[，]([一-龟])/u";  
$chinese_punc_english = "/([一-龟])[，]([A-Za-z0-9])/u";  
$replacement = "$1\t$2";  
$out = preg_replace($chinese_punc_english, $replacement, $text);  
echo  
'<table>  
    <tr>  
        <td><textarea rows="10" name ="text">'.$out.'</textarea></td>  
    </tr>  
</table>';  
?>  