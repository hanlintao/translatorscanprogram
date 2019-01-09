<?php include "shared/head.php"; ?>  
<table width="100%" border="1">  
  <tbody>  
    <tr>  
      <td width="10%">  
        <p><strong>序号</strong></p>  
      </td>  
      <td width="45%">  
        <p><strong>中文</strong></p>  
      </td>  
      <td width="45%">  
        <p><strong>英文</strong></p>  
      </td>  
    </tr>  
<?php include "shared/conn.php"; ?>     
<?php  
    mysqli_select_db( $conn,"fmprc" );  
    $zh_CN =$_POST["zh_CN"];  
    $en_US =$_POST["en_US"];  
    $sql = "SELECT ID, zh_CN, en_US FROM tm WHERE zh_CN LIKE '%$zh_CN%' AND en_US LIKE '%$en_US%'";  
    mysqli_query($conn,"set names 'utf8'");  
    $gettm = mysqli_query($conn,$sql);  
    if(! $gettm )  
        {  
            echo "无法获取翻译记忆，请检查问题";  
        }  
    else  
        {  
            while ($row = mysqli_fetch_array($gettm, MYSQLI_ASSOC))   
            {  
                $row["zh_CN"]=preg_replace("/$zh_CN/i", "<font color=blue><b>$zh_CN</b></font>",$row["zh_CN"]);  
                $row["en_US"]=preg_replace("/$en_US/i", "<font color=red><b>$en_US</b></font>",$row["en_US"]);  
                echo "<tr>  
                        <td width='10%'>  
                        <p>{$row["ID"]}</p>  
                        </td>  
                        <td width='45%'>  
                        <p>{$row["zh_CN"]}</p>  
                        </td>  
                        <td width='45%'>  
                        <p>{$row["en_US"]}</p>  
                        </td>  
                      </tr>";  
            }  
        }   
    mysqli_close($conn);  
?>  
  </tbody>  
</table>  
<?php include "shared/foot.php"; ?>