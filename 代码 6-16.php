<?php include "shared/head.php"; ?>  
<form action="result.php" method="POST">  
    <table>  
        <tr>  
            <td>  
                <input type="text" name="zh_CN" placeholder="中文检索词" />  
            </td>  
            <td>  
                <input type="text" name="en_US" placeholder="英文检索词" />  
            </td>  
            <td>  
                <button type="submit">搜索</button>  
            </td>  
        </tr>  
    </table>  
</form>   
<?php include "shared/foot.php" ?>  