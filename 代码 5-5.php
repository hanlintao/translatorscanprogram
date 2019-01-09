<?php include "shared/conn.php"; ?>   
<?php  
$database = "  
CREATE DATABASE myterm    
DEFAULT CHARACTER SET utf8    
DEFAULT COLLATE utf8_general_ci;  
";  
if(!mysqli_query($conn,$database))  
    {  
        echo "数据库创建失败，请检查原因。".mysqli_error($conn). "<br>";  
    }  
    else   
    {  
        echo "数据库创建成功！" . "<br>";  
    }  
mysqli_select_db($conn,"myterm");  
$table = "  
CREATE TABLE `TermData`       
(      
    `ID` INT(5) NOT NULL AUTO_INCREMENT ,      
    `zh_CN` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,   
    `en_US` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,   
    PRIMARY KEY (`ID`)      
)       
ENGINE = InnoDB       
CHARSET=utf8       
COLLATE utf8_general_ci;   
";  
if(!mysqli_query($conn,$table))  
    {  
        echo "数据表创建失败，请检查原因。".mysqli_error($conn). "<br>";  
    }  
    else   
    {  
        echo "数据表创建成功！" . "<br>";  
    }  
?>  
