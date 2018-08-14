<?php include "shared/head.php"; ?>  
  
<table width="89%" border="1">  
  <tbody>  
    <tr>  
      <td width="21%">  
        <p><strong>序号</strong></p>  
      </td>  
      <td width="31%">  
        <p><strong>中文</strong></p>  
      </td>  
      <td width="46%">  
        <p><strong>英文</strong></p>  
      </td>  
    </tr>  
      
<?php include "shared/conn.php"; ?>     
  
<?php  
    mysqli_select_db( $conn,"stiterm" );  
    $query =$_POST["query"];  
    $sql = "SELECT ID, zh_CN, en_US FROM termdata WHERE zh_CN LIKE '%$query%' or en_US LIKE '%$query%'";  
    mysqli_query($conn,"set names 'utf8'");  
    $getterm = mysqli_query($conn,$sql);  
    
    if(! $getterm )  
        {  
            echo "无法获取术语数据，请检查问题";  
        }  
    else  
        {  
            while ($row = mysqli_fetch_array($getterm, MYSQLI_ASSOC))  
              
            {  
                $row['zh_CN']=preg_replace("/$query/i", "<font color=red><b>$query</b></font>",$row['zh_CN']);  
                $row['en_US']=preg_replace("/$query/i", "<font color=red><b>$query</b></font>",$row['en_US']);  
                echo "<tr>  
                        <td width='21%'>  
                        <p>{$row["ID"]}</p>  
                        </td>  
                        <td width='31%'>  
                        <p>{$row["zh_CN"]}</p>  
                        </td>  
                        <td width='46%'>  
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
