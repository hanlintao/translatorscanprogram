<?php include "shared/head.php"; ?>  
<?php   
    include "shared/conn.php";  
    mysqli_select_db( $conn,"fmprc" );  
    mysqli_query($conn,"set names 'utf8'");   
    $xml = simplexml_load_file("source.tmx");  
    $json = json_encode($xml);  
    $jsondata = json_decode($json,true);  
    foreach ($jsondata["body"]["tu"] as $tu)  
        {  
            $zh_CN=$tu["tuv"][0]["seg"];  
			$zh_CN=str_replace("'","\'",$zh_CN);  
			$en_US=$tu["tuv"][1]["seg"];  
			$en_US=str_replace("'","\'",$en_US);  
			$insert_sql="INSERT INTO tm(zh_CN,en_US) values('$zh_CN','$en_US')";  
			$import=mysqli_query($conn,$insert_sql); 
            if(!$import)  
                {  
                    echo "<font color=red><b>插入失败: </b></font>".$zh_CN."<br>";  
                    echo "<font color=red><b>插入失败: </b></font>".$en_US."<br>";  
                }  
                else  
                {  
                    echo "插入成功: ".$zh_CN."<br>";  
                    echo "插入成功: ".$en_US."<br>";  
                }  
        }     
?>  
<?php include "shared/foot.php" ?> 