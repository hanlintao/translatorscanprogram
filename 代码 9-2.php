<?php  
include "baidu_transapi.php";  
$source="北京语言大学高级翻译学院成立于2011年5月20日。";  
$query = $source;  
$from = "zh-CHS";  
$to = "en";  
$translation = translate($query, $from, $to);  
echo "待译原文为： ".$query."<br>";  
echo "百度翻译给出的译文为： ".$translation["trans_result"][0]["dst"];  
?>  