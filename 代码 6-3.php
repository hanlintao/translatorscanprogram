<?php include "shared/head.php"; ?>  
<?php   
    $xml = simplexml_load_file("source.tmx");  
    $json = json_encode($xml);  
    $jsondata = json_decode($json,true);  
    foreach ($jsondata["body"]["tu"] as $tu)  
        {  
            echo $tu["tuv"][0]["seg"]."<br>";  
            echo $tu["tuv"][1]["seg"]."<br>";  
            echo "<br>";  
        }     
?>  
<?php include "shared/foot.php" ?>  