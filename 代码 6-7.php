<?php   
$xml = simplexml_load_file('source.tmx');  
$json = json_encode($xml);  
print_r($json);  
?>  