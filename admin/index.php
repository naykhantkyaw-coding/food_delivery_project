<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Admin</title>
    <?php
        session_start();
        include("connection.php");
        if(isset($_POST['admin_login'])){
            $name=$_POST['admin_user'];
            $pass=$_POST['admin_pass'];
            $adminquery="SELECT * FROM `aduser`";
            $run_admin=mysql_query($adminquery);
            if(mysql_num_rows($run_admin)>0){
                while($adminfetch=mysql_fetch_object($run_admin)){
                        $loginname=$adminfetch->admin_name;
                         $loginpass=$adminfetch->admin_pass;
                }
            }

            if($name==$loginname && $pass==$loginpass){
                $_SESSION['admin']=$name;
               header("location:vieworder.php");
            }else{
                echo "<script>alert('password or username is incorrect')</script>";
            }
    }

           
    ?>
    
</head>
<body>
    <div class="main">
        <div class="main-photo"> 
            <img src="imgs/logo2.png" alt="">
        </div>
        <div class="info">
            <h2>Login as Admin User</h2>
            <div class="form">
                <div class="png">
                    <img src="imgs/main-icon.png" alt="">
                </div>
                <form method="post">
                    <input type="text" name="admin_user" placeholder="Username">
                    <input type="password" name="admin_pass" placeholder="Password">
                    <input type="submit" name="admin_login" value="Login">
                </form>
                <div class="contact">
                    <a href="#">Forget your Password?</a>
                    <a href="#">Get Help From System Developer</a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>