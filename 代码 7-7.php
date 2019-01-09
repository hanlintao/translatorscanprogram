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
echo "英文单词个数为：".str_word_count($text)."<br>";  
echo "英文单词包括：";  
$english_char_num="";  
foreach(str_word_count($text,1) as $english)  
{  
    $english_char_num = $english_char_num + strlen($english);  
    echo $english." ";  
}  
echo "<br>"."英文单词字符总数为：".$english_char_num."<br>";  
echo "全文空格个数为：".substr_count($text," ")."<br>";  
  
$chinese_punct= "，。、！？：；﹑•＂…‘’“”〝〞∕¦‖—　〈〉﹞﹝「」‹›〖〗】【»«』『〕〔》《﹐¸﹕︰﹔！¡？¿﹖﹌﹏﹋＇´ˊˋ―﹫︳︴¯＿￣﹢﹦﹤‐¬˜﹟﹩﹠﹪﹡﹨﹍﹉﹎﹊ˇ︵︶︷︸︹︿﹀︺︽︾ˉ﹁﹂﹃﹄︻︼（）";  
$pattern = array("/[[:punct:]]/i", "/['.$chinese_punct.']/u", "/[[:alnum:]]/", "/[[:space:]]/",);  
$chinese = preg_replace($pattern, '', $text);  
echo "中文文本包括：".$chinese."<br>";  
echo "中文字数为：".mb_strlen($chinese, "utf8")."<br>";  
preg_match_all("/\d+/",$text,$matches);  
echo "数字包括：";  
$number_char_num="";  
foreach($matches[0] as $number)  
{  
    $number_char_num=$number_char_num+strlen($number);  
    echo $number." ";  
}  
echo "<br>"."数字个数为：".count($matches[0])."<br>";  
echo "数字字符总数为：".$number_char_num."<br>";  
preg_match_all("/[[:punct:]]/i",$text,$punct_matches);  
echo "英文标点符号个数为：".count($punct_matches[0])."<br>";  
preg_match_all("/['.$chinese_punct.']/u",$text,$chinese_punct_matches);  
echo "中文标点符号个数为：".count($chinese_punct_matches[0])."<br>";
?>  
<?php include "shared/foot.php"; ?> 