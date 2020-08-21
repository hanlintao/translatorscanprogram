<?php include "shared/head.php"; ?>   
<?php   
include "shared/conn.php";  
mysqli_select_db($conn,"myterm");  
mysqli_query($conn, "set names 'utf8'");  
$tid=$_GET["tid"];  
$sql = "SELECT zh_CN,en_US FROM termdata WHERE ID={$tid}";  
$result = mysqli_query($conn,$sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
?>   
<form action="update.php" method="POST" >  
    <table>    
        <tr>    
            <td>    
                中文：<input type="text" name="zh_CN" value="<?php echo $row['zh_CN'];?>" >    
            </td>    
            <td>    
                英文：<input type="text" name="en_US" value="<?php echo $row['en_US'];?>">  
            </td>   
            <td>   
                <input type="hidden" name="ID" value="<?php echo $tid; ?>" >  
                <button type="submit" >提交</button>  
            </td>  
        </tr>    
    </table>  
</form>  
<?php include "shared/foot.php"; ?> 
