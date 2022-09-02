<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <script defer src="js/swiper.js"></script>
    <script defer src="js/nav.js"></script>
    <script defer src="js/indexslider.js"></script>
    <title>Food Delivery</title>
</head>
<body>
    <!-- navbar -->
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
    <!-- slider -->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wapper">
                <div class="swiper-slide slide">
                    <div class="slid-content">
                        <span class="spn">Our Special dishes</span>
                        <h3 class="slide-name">Special Fish meal</h3>
                        <p class="slide-p">This is one of our special meal for customers.Tuna and roasted asparagus whis is very unique taste and fresh food. </p>
                    </div>
                    <div class="slide-img">
                        <img class="phone" src="imgs/index-png1.png" style="height:400px;width:400px;"  alt="">
                    </div>  
                </div>

                <div class="swiper-slide slide">
                    <div class="slid-content">
                        <span class="spn">Our Special dishes</span>
                        <h3 class="slide-name">Special chicken meal</h3>
                        <p class="slide-p">This is also the one of very special dish in our restaruant which is with roasted checken breast and sweet potato.  </p>
                    </div>
                    <div class="slide-img">
                        <img class="phone" src="imgs/index-png2.png" style="height:400px;width:400px;"    alt="">
                    </div>  
                </div>

                <div class="swiper-slide slide">
                    <div class="slid-content">
                        <span class="spn">Our Special dishes</span>
                        <h3 class="slide-name">Pock and potato</h3>
                        <p class="slide-p">If you want Special and Unique taste,try this which is with rostated pock and potato with very unique flavor.  </p>
                    </div>
                    <div class="slide-img">
                        <img class="phone" src="imgs/index-png3.png" style="height:400px;width:400px;" alt="">
                    </div>  
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End Slider -->
    <!-- content -->
    <div class="content">
        <div class="content-info">
            <div class="content-letter">
                <h2>Food Delivery<br>Myanmar<img src="imgs/main-icon.png" style="height: 50px; width: 50px;" alt=""></h2>
                
                <p>This is Myanmar's very first one stop food delivery service. We deliver our own unique speical meal for our valuable customers. We will provide you with Fresh and Tastey dishes all you need to pay is your hunger! </p>
                <a href="signin.php"><input type="button" value="ORDER"></a>
            </div>
        </div>
        <div class="content-img">
           <div class="content-item">
            <img src="imgs/doortodoor.jpg" alt="">
           </div>
        </div>
    </div>
    <!-- End content -->
    <!-- footer --> 
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