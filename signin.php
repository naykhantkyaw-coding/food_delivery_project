<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <script defer src="js/nav.js"></script>
    <title>Sign In</title>
    <?php
    error_reporting(1);
    session_start();
    include("connection.php");
    if(isset($_POST['sign-in'])){
        $user=$_POST['email'];
        $pass=$_POST['pass'];
        $quary="SELECT * FROM signup WHERE Email='{$_POST['email']}'";
        $checking=mysql_fetch_object(mysql_query($quary));
        $name=$checking->Name;
        $username=$checking->Email;
        $password=$checking->Password;
        $userid=$checking->sing_up_id;
        $address=$checking->Address;
        $phone=$checking->Phone;
        $img=$checking->Prof_img; 
        $gender=$checking->Gender;      
        if($user==$username && $password==md5($pass)){
            $_SESSION['Email']=$username;
            $_SESSION['id']=$userid;
            $_SESSION['name']=$name;
            $_SESSION['img']=$img;
            $_SESSION['phone']=$phone;
            $_SESSION['address']=$address;
            $_SESSION['gender']=$gender;
           header("location:onlineorder.php");
        }else{
            echo '<script>alert("user name and password wrong!")</script>';
        }
    }

    ?>
</head>
<body>
    
    <div class="navbar">
        <div class="nav-logo">
            <img src="imgs/main-icon.png" alt="">
        </div>
        <div class="brand-name">
            <label>Food Deliver</label>
        </div>
        <div class="nav-menu">
            <nav>
                <ul>
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="aboutus.php" class="nav-link">About Us</a></li>
                    <li><a href="signin.php" class="nav-link">Online Order</a></li>
                    <li><a href="contact.php" class="nav-link">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="humbager">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <!-- End Navbar -->

    <div class="sub">

        <div class="main">

            <div class="sign-in">
    
                <div class="info">
                    <h1>Sign in</h1>
                    <form method="post">
                        <input id="a" name="email" type="text" placeholder="Email" required>
                        <input id="a" name="pass" type="password" placeholder="Password" required>
                        <a href="mailto:rasunno@gmail.com"><article>Forgot your password?</article></a>
                        <input type="submit" name="sign-in" value="SIGN IN">
                    </form>
                 </div>    
                </div>
    
    
            <div class="sing-up">
    
                <div class="greeding">
                    <h1>Hello,Friend!</h1>
                    <article>Enter your personal details and start journy with us</article>
                    <a href="signup.php"><input type="button" value="SIGN UP"></a>
                </div>
    
            </div>
    
        </div>
    </div>

  
    <div class="footer">

        <div class="footer-item1">
            <h4>About Us</h4>
            <p>
                Food Deliver is a fooddetch company & deliver fresh and tastey food to feed your empty hunger stomach.It is started by a team of foodie who understand food hunger desire very well. 
            </p>
        </div>

        <div class="footer-item2">
            <h4>Information</h4>
                <ul>
                   <a href="aboutus.php"> <li>About Us</li></a>
                   <a href="contact.php"> <li>Contact Us</li></a>
                   <a href="#"> <li>Write Feedback</li></a>
                   <a href="#"><li>Privacy & Policy</li></a>
                   <a href="#"><li>Refund Policy</li></a>
                </ul>
        </div>

        <div class="footer-item3">
            <h4>Why Food Deliver?</h4>
            <p>
                Fresh & Tastey Food<br>
                Food @ Reasonable Price<br>
                We Serve between 7:00 AM to 10:00 PM<br>
                Separate Utensils for Veg & Non-Veg Food
            </p>
        </div>

        <div class="footer-item4">
            <h4>Get In Touch</h4>
            <p>
                contact us<br>
                Email: rasunoelsol@gmail.com<br>
                Phone: 09973566351
            </p>
        </div>
        <article>&copy; 2022.All rights Reserved.Developed by Nay Khant Kyaw @ Rasuno&nbsp;<?php echo date("d").'/'.date("m").'/'.date("Y");?></article>
    </div>
</body>
</html>