<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <script defer src="js/nav.js"></script>
    <title>Sign UP</title>

    <?php
        error_reporting(1);
        include("connection.php");
        if(isset($_POST['sing_up'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['pass'];
            $hashpass=md5($password);
            $quary="INSERT INTO signup VALUES ('','$name','$email','$hashpass','','','','')";
            $quary2="SELECT * FROM signup WHERE Email='{$_POST['email']}'";
            $checkmail=mysql_fetch_object(mysql_query($quary2));
            $checking=$checkmail->Email;
            if($checking==$_POST['email']){
                echo "<script>alert('Email is already registered!Please try agin with another email.')</script>";
            }elseif(strlen($password)<8){
                echo "<script>alert('Password must be more than 8 characters')</script>";
            }elseif($password==$_POST['com_pass']){
                if(mysql_query($quary)){
                    $output="Your account is successfully registered.Please go signin.";
                }else{
                    echo "<script>alert('something wrong with program')</script>";
                }
            }else{
                echo "<script>alert('Password does not match! Please try again.')</script>";
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
            <p class="output" style="color:blueviolet;"><?php echo @$output; ?></p>
        <div class="main">

            <div class="sign-in">
                <div class="greeding">
                    <h1>Welcome Back !</h1>
                    <article>To keep connected with us pleae login with your personal info</article>
                   <a href="signin.php"> <input type="button" value="SIGN IN"></a>
                </div>
            </div>
            <div class="sign-up">

                <div class="info">
                    <h1>Create Account</h1>
                    <form method="post">
                        <input id="a" type="text" name="name" placeholder="Name" required>
                        <input id="a" type="email" name="email" placeholder="example@gmail.com" required>
                        <input id="a" type="password" name="pass" placeholder="Password" requird>
                        <input id="a" type="password" name=com_pass placeholder="Confirm password" required>
                        <input  class="test" type="submit" name="sing_up" value="SIGN UP">
                    </form>
                   

                </div>

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