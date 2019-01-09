<?php include "shared/head.php"; ?>  
<form action="" method="POST">  
    <table>  
    <tr>  
        <td><textarea rows="10" name ="text"></td>  
    </tr>  
    <tr>  
        <td><button type="submit">开始替换</button></td>  
    </tr>  
    </table>  
</form>  
<?php  
$text=$_POST["text"];  
echo "在这里显示替换结果";  
?>  
<?php include "shared/foot.php"; ?> 