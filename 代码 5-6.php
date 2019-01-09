<?php include "shared/head.php"; ?>   
<form action="upload_file.php" method="POST" enctype="multipart/form-data">  
    <table>    
        <tr>    
            <td>    
                <input type="file" name="file">    
            </td>    
            <td>    
                <input type="submit" name="submit" value="上传">  
            </td>    
        </tr>    
    </table>  
</form>  
<?php include "shared/foot.php"; ?> 
