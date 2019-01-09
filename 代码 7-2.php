<?php include "shared/head.php"; ?>  
<form action="" method="POST">  
    <table>  
    <tr>  
        <td><textarea rows="10" name ="text">北京语言大学（Beijing Language and Culture University, BLCU）成立于1962年。</textarea></td>  
    </tr>  
    <tr>  
        <td><button type="submit">开始统计</button></td>  
    </tr>  
    </table>  
</form>  
<?php  
$text=$_POST["text"];  
echo "英文单词个数为：".str_word_count($text);  
?>  
<?php include "shared/foot.php"; ?> 