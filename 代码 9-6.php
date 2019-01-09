<?php include "shared/head.php"; ?>  
<form action="" method="POST">  
    <table>  
    <tr>  
        <td><textarea rows="10" cols="80" name ="text"><?php echo $_POST["text"];?><textarea></td>  
    </tr>  
    <tr>  
        <td><button type="submit">翻译</button></td>  
    </tr>  
    </table>  
</form>  
<?php  
if(isset($_POST["text"]))  
{  
    include_once "baidu_transapi.php";  
    include_once "youdao_transapi.php";  
  
    $source=$_POST["text"];  
    $query = $source;  
    $from = "zh-CHS";  
    $to = "en";  
    $baidu_translation = translate($query, $from, $to);  
    $youdao_translation = translate_y($query, $from, $to);  
      
    echo "  
    <table border='1'>  
        <tr>  
            <td>百度翻译</td>  
            <td>有道翻译</td>  
        </tr>  
        <tr>  
            <td>".$baidu_translation["trans_result"][0]["dst"]."</td>  
            <td>".$youdao_translation["translation"][0]."</td>  
        </tr>  
    </table>  
    ";  
}  
else  
{  
    echo "请输入待译中文";  
}  
?>  
<?php include "shared/foot.php"; ?>  