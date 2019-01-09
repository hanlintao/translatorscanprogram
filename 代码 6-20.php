<?php include "shared/head.php"; ?>  
<table width="100%" border="1">  
  <tbody>  
    <tr>  
      <td width="10%">  
        <p><strong>序号</strong></p>  
      </td>  
      <td width="10%">  
        <p><strong>相似度</strong></p>  
      </td>  
      <td width="40%">  
        <p><strong>中文</strong></p>  
      </td>  
      <td width="40%">  
        <p><strong>英文</strong></p>  
      </td>  
    </tr>  
<?php include "shared/conn.php"; ?>     
<?php  
    mysqli_select_db( $conn,"fmprc" );  
    $zh_CN =$_POST["zh_CN"];  
    $sql = "SELECT ID, zh_CN, en_US FROM tm";  
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
                similar_text($zh_CN, $row["zh_CN"], $percent);   
                  
                if($percent > 50)  
                {  
                    echo "  
                      <tr>  
                        <td width='10%'>  
                        <p>{$row["ID"]}</p>  
                        </td>  
                        <td width='10%'>  
                        <p>{$percent}</p>  
                        </td>  
                        <td width='40%'>  
                        <p>{$row["zh_CN"]}</p>  
                        </td>  
                        <td width='40%'>  
                        <p>{$row["en_US"]}</p>  
                        </td>  
                      </tr>";  
                }     
            }  
        }   
    mysqli_close($conn);  
?>  
  </tbody>  
</table>  
<?php include "shared/foot.php"; ?>   