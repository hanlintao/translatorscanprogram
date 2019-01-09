<?php   
$xml = simplexml_load_file('source.tmx');  
$json = json_encode($xml);  
$jsondata = json_decode($json,true);  
print_r($jsondata);  
?>  