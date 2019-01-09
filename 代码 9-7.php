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
  
    $query=$_POST["text"];  
    $zh_CHS = "zh_CHS";  
    $zh = "zh";  
    $en = "en";  
    $baidu_translation = translate($query, $zh, $en);  
    $youdao_translation = translate_y($query, $zh_CHS, $en);  
      
    $baidu_result = $baidu_translation["trans_result"][0]["dst"];  
    $youdao_result = $youdao_translation["translation"][0];  
      
    $baidu_back_translation = translate($baidu_result,$en,$zh);  
    $youdao_back_translation = translate_y($youdao_result,$en,$zh_CHS);  
      
    $baidu_back_result = $baidu_back_translation["trans_result"][0]["dst"];  
    $youdao_back_result = $youdao_back_translation["translation"][0];  
      
    similar_text($query,$baidu_back_result,$b_percentage);  
    similar_text($query,$youdao_back_result,$y_percentage);  
      
    echo "  
    <table border='1'>  
        <tr>  
            <td>百度翻译</td>  
            <td>有道翻译</td>  
        </tr>  
        <tr>  
            <td>".$baidu_result."</td>  
            <td>".$youdao_result."</td>  
        </tr>  
        <tr>  
            <td>回译结果：</td>  
            <td>回译结果：</td>  
        </tr>  
        <tr>  
            <td>".$baidu_back_result."</td>  
            <td>".$youdao_back_result."</td>  
        </tr>  
        <tr>  
            <td>回译相似率：".$b_percentage."</td>  
            <td>回译相似率：".$y_percentage."</td>  
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