<?php include "shared/head.php" ?>  
<?php  
if (isset($_POST["login"]))  
{  
    include "shared/conn.php";  
    mysqli_select_db($conn,"myterm");  
    mysqli_query($conn, "set names 'utf8'");  
    $username = $_POST["username"];  
    $password = $_POST["password"];  
    $user_sql ="SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";  
    $user_result = mysqli_query($conn,$user_sql);  
    if(mysqli_num_rows($user_result) == 1)  
    {  
        session_start();  
        $_SESSION["username"] = $username;  
        header("Location:index.php");  
    }  
    else  
    {  
        echo "<script>alert('账户或密码无效！')</script>";  
    }  
}  
?>  
<form action="" method ="POST" >  
    <table>  
        <tr>  
            <td>  
                用户名：<input type = "text" name = "username">  
            </td>  
            <td>  
                密码：<input type = "password" name = "password">  
            </td>  
            <td>  
                <input type = "submit" name = "login" value = "登录">  
            </td>  
        </tr>  
    </table>  
</form>  
<?php include "shared/foot.php" ?>