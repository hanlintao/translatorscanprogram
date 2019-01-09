<?php   
$xml = simplexml_load_file('source.tmx');  
foreach ($xml->body->tu as $tu)  
{  
    echo $tu->tuv[0]->seg."<br>";  
    echo $tu->tuv[1]->seg."<br>";  
    echo "<br>";        
}  
?>  