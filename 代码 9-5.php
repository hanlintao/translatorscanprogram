<?php  
include_once "baidu_transapi.php";  
include_once "youdao_transapi.php";  
$source="北京语言大学高级翻译学院成立于2011年5月20日。";  
$query = $source;  
$from = "zh-CHS";  
$to = "en";  
$baidu_translation = translate($query, $from, $to);  
$youdao_translation = translate_y($query, $from, $to);  
  
echo "待译原文为： ".$query."<br>";  
echo "百度翻译给出的译文为： ".$baidu_translation["trans_result"][0]["dst"]."<br>";  
echo "有道翻译给出的译文为： ".$youdao_translation["translation"][0];  
?>  