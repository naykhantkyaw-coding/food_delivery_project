<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script defer src="js/nav.js"></script>
    <title>Contact Us</title>
    <?php
        include("connection.php");
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['Email'];
            $sub=$_POST['subject'];
            $phone=$_POST['phone'];
            $msg=$_POST['message'];
            $quary="INSERT INTO contact VALUES ('','$name','$email','$sub','$phone','$msg')";
            if(mysql_query($quary)){
                echo '<script>alert("Your Message has been sent successfully!")</script>';
            }
        }
    ?>
</head>
<body>
    <!-- Navbar -->
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
    <!-- Content -->
    <div class="contact-us-cover">
        <img src="imgs/contact-cover1.jpg" alt="">
    </div>
    <div class="form">
        <h2>Get Intouch With Us</h2>
        <div class="form-item">
            <form method="post">
                <table>
                    <tr>
                        <td><input type="text" name="name" placeholder="Name" required></td>
                        <td><input type="text" name="Email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="subject" placeholder="Subject" required></td>
                        <td><input type="text" name="phone" placeholder="Phone" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="message" placeholder="Your Message" id="" cols="70" rows="7"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="address">
            <div class="address-img">
                <img src="imgs/dd.png" style="height: 100px; width:100px; margin-left:38%;">
            </div>
            <div class="address-item">
                <table>
                    <tr>
                        <td><img src="imgs/loc.png" style="height: 25px; width:25px;" alt=""></td>
                        <td><p>86(E), Say Tanar Thukha Street Hledan, Kamaryut</p></td>
                    </tr>
                    <tr>
                        <td><img src="imgs/env.png" style="height: 25px; width:25px;" alt=""></td>
                        <td><p>rasunoelsol@gmail.com<br>
                            admin@gmail.com</p></td>
                    </tr>
                    <tr>
                        <td><img src="imgs/pho.png" style="height: 25px; width:25px;" alt=""></td>
                        <td><p>+959 973566351<br>
                            +959 9887645376</p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="contact-us-secondcover">
        <img src="imgs/contact-meal.png" alt="">
    </div>
    <!-- End content -->
    <!-- Footer -->
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