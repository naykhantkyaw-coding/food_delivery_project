<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <script defer src="js/nav.js"></script>
    <script defer src="js/slide.js"></script>
    <title>About Us</title>
</head>
<body>
    <!--Navbar  -->
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
    <!-- cover -->
    <div class="test-cover">
        <img src="imgs/aboutus-cover.jpg" alt="">
    </div>
    <!-- End cover -->
    <!-- content -->
    <div class="content">
        <div class="content-letter">
                <h2>Experience The Best Food All Days For Your Hunger</h2>
                <p>Don't cook or search for food on street, just order with food deliver & we will deliver the fresh and tastey food at your door steps or work place within 20 Min to 30 Min. </p>
        </div>

        <div class="content-info">
             <div class="slider">
                <h2>Fresh & Tastey Food</h2>
                <div class="slider-item">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                                <img src="imgs/slide1.jpg" style="width:100%;">
                            </div>
                                
                            <div class="mySlides fade">
                                <img src="imgs/slide2.jpg" style="width:100%">
                            </div>
                                
                            <div class="mySlides fade">
                                <img src="imgs/slide3.webp" style="width:100%">
                            </div>
                                
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>  
                    </div>
                        <br>
                        <div style="text-align:center; width:100%; ">
                            <span class="dot" onclick="currentSlide(1)"></span> 
                            <span class="dot" onclick="currentSlide(2)"></span> 
                            <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsam, delectus corrupti cumque soluta mollitia ipsum </p>
             </div>
             <div class="content-item">
                <table>
                    <tr>
                        <td><img src="imgs/tb1.png" alt=""></td>
                        <td>
                            <p>
                            <h3>Fresh & Tastey Food</h3> 
                            <p> 
                                We maintain height hygiene at our kitchen & deliver fresh and tastey food at your door steps or work place.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="imgs/tb2.png" alt=""></td>
                        <td>
                             <h3>Food @ Reasonable Price</h3>
                            <p>
                                Our rate are very reasonable with best quality food,as we want to serve every foodi in town.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="imgs/tb3.png" alt=""></td>
                        <td>
                            
                            <h3>We Serve between 7:00 AM to 10:00 PM</h3>    
                            <p>    
                                We deliver varieties of veg & non-veg foods,beverages,cakes ans also gift items from 7:00 AM to 10:00 PM every day.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="imgs/tb4.png" alt=""></td>
                        <td>
                            <h3>Seperate packaging for Veg & Non-Veg</h3>
                            <p>
                                We keep separate utensils for Veg & Non-Veg foods so a vagetarian can slo enjoy food with us.
                            </p>
                        </td>
                    </tr>
                </table>
             </div>
        </div>
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