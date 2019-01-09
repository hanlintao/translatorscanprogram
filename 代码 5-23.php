<?php include "shared/head.php"; ?>  
<table width="100%" border="1">  
  <tbody>  
    <tr>  
      <td width="10%">  
        <p><strong>序号</strong></p>  
      </td>  
      <td width="35%">  
        <p><strong>中文</strong></p>  
      </td>  
      <td width="35%">  
        <p><strong>英文</strong></p>  
      </td>  
      <td width="10%">  
        <p><strong>删除</strong></p>  
      </td>  
      <td width="10%">  
        <p><strong>编辑</strong></p>  
      </td>  
    </tr> 
<?php include "shared/conn.php"; ?>     
<?php  
    mysqli_select_db( $conn,"myterm" );  
    $sql = "SELECT ID, zh_CN, en_US FROM termdata";  
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
                echo "<tr>  
						<td width='10%'>  
						<p>{$row["ID"]}</p>  
						</td>  
						<td width='35%'>  
						<p>{$row["zh_CN"]}</p>  
						</td>  
						<td width='35%'>  
						<p>{$row["en_US"]}</p>  
						</td>  
						<td width='10%'>  
						<p><a href='delete.php?tid={$row['ID']}'>删除</a></p>  
						</td>  
						<td width='10%'>  
						<p><a href='edit.php?tid={$row['ID']}'>编辑</a></p>  
						</td>  
					</tr>";  
            }  
        }   
    mysqli_close($conn);  
?>  
  </tbody>  
</table>  
<?php include "shared/foot.php"; ?>     