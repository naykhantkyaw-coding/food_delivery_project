<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/onlineorder.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Profile Page</title>
    <?php
        if(isset($_POST['prof_update'])){
            $profid=$_POST['prof_id'];
            $profname=$_POST['prof_name'];
            $prof_img=$_FILES['prof_img']['name'];
            $prof_img_tmp_name=$_FILES['prof_img']['tmp_name'];
            $prof_folder='profile/'.$prof_img;
            $profmail=$_POST['prof_mail'];
            $prophone=$_POST['prof_phone'];
            $prof_address=$_POST['prof_address'];
            $gender=$_POST['gender'];

            $profile_up="UPDATE signup SET Name=' $profname',Email='$profmail',Phone='$prophone',Prof_img='$prof_img',Address='$prof_address',Gender='$gender' WHERE sing_up_id='$profid'";
            if(mysql_query($profile_up)){
                move_uploaded_file($prof_img_tmp_name,$prof_folder);
                echo"<script>alert('Update successfully!Please Login again!')</script>";
                header("location:signin.php");
            }else{
                echo"<script>alert('fial')</script>";
            }
        }
        if(isset($_POST['logout'])){
            session_destroy();
            header("Location: index.php");
        }
    ?>
</head>
<body>
<?php
        $count_q="select count(*) FROM cart";
        $resule=mysql_query($count_q);
        $final=mysql_fetch_array($resule);
        $total=$final[0];
    ?>
<div class="logo-container">
        <img src="imgs/main-icon.png" style="height: 80px; width:80px;"  alt="">
        <h3 class="logo">Foodoo Delivery Service Myanmar</h3>
        <h3 id="cart-logo" class="fas fa-shopping-cart"><span class="cart-num"><?php echo $total;?></span></h3>
    </div>
    <div class="sidebar">
    <div class="sidebar-menu">
         <span class="fas fa-home"></span>
         <a href="index.php">Home</a>
     </div>
     <div class="sidebar-menu">
         <span class="fas fa-shop"></span>
         <a href="onlineorder.php">Shop</a>
     </div>
     <div class="sidebar-menu">
         <span class="fas fa-user"></span>
         <a href="#">Profile</a>
     </div>
    </div>
    <div class="profile_container">
        <form method="post" enctype="multipart/form-data" class="profile_form">
                <input type="hidden" name="prof_id" value="<?php echo $_SESSION['id']; ?>">
            <table>
                <tr>
                    <td><span class="prof_img"><img src="profile/<?php echo $_SESSION['img'];?>" style="height:100px;width:100px;border-radius:2rem;"></span></td>
                    <td><input type="text" name="prof_name" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="file" name="prof_img" accept="image/png,image/jpg,image/jpeg" ></td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                    <td><input type="text" name="prof_mail" value="<?php echo $_SESSION['Email']; ?>"></td>
                </tr>
                <tr>
                    <td><span>Phone</span></td>
                    <td><input type="text" name="prof_phone" value="<?php echo $_SESSION['phone'] ?>"></td>
                </tr>
                <tr>
                    <td><span>Address</span></td>
                    <td><input type="text" name="prof_address" value="<?php echo $_SESSION['address'] ?>"></td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td><input type="text" name="gender" value="<?php echo $_SESSION['gender'];?>"></td>
                </tr>
                <tr >
                    <td colspan="2" style="text-align:center;"><input class="update-bt" type="submit" name="prof_update" value="Update"><input class="logout-bt" type="submit" name="logout" value="Logout"></td>
                </tr>
            </table>
        </form>    
    </div>
</body>
</html>