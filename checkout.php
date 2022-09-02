<?php
    error_reporting(1);
    include("connection.php");
    if(isset($_POST['order-btn'])){

        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $method=$_POST['p_method'];
        $address_1=$_POST['address-1'];
        $address_2=$_POST['address-2'];
        $city=$_POST['city'];
        $township=$_POST['township'];

        $cart_query="SELECT * FROM cart";
        $run_cart=mysql_query($cart_query);
        $productprice_total=0;
        $sub_total=0;
        if(mysql_num_rows($run_cart)>0){
            while($fetch_cart=mysql_fetch_assoc($run_cart)){
                $product_name[]=$fetch_cart['name'] .'('. $fetch_cart['qty'] .')';
                $product_price=$fetch_cart['price'] * $fetch_cart['qty'];
                $done=$fetch_cart['cart_id'];
                $sub_total+=$product_price;
                $text_text=$sub_total*0.1;
                $productprice_total=$sub_total+$text_text+2500;
            }
        }
        $total_product= implode(',',$product_name);
        $order_testing="INSERT INTO `order`(`order_id`, `Name`, `Phone`, `Email`, `Pay_method`, `Address_1`, `Address_2`, `City`, `Township`, `Total_prod`, `Total_pric`) VALUES ('','$name','$phone','$email','$method','$address_1','$address_2','$city','$township','$total_product','$productprice_total')";
        $run_order_testing=mysql_query($order_testing);
        
            if($run_cart && $run_order_testing ){
                echo " 
          <div class='order-message-container'>
        <div class='message-container'>
            <h4>Thank you for Order!</h4>
            <div class='detail-info'>
                <span class='productsp'>".$total_product."</span>
                <span class='total'>Total :".$productprice_total."&nbsp;MMK</span>
            </div>
            <div class='custoner-info'>
                <p>Your name : <span>".$name."</span> </p>
                <p>Your Phone : <span>".$phone."</span> </p>
                <p>Your Email : <span>".$email."</span> </p>
                <p>Your Method : <span>".$method."</span> </p>
                <p>Your Address : <span>".$address_1.",".$address_2.",".$city.",".$township."</span> </p>
            </div>
            <a href='checkout.php?remove=$done' class='continue-btn'>Continue Shopping</a>
        </div>
    </div>
                ";
            }
        }

        if(isset($_GET['remove'])){
            $done_shopping=$_GET['remove'];
            $donequery="DELETE FROM `cart` WHERE cart_id=$done_shopping";
            $run_query=mysql_query($donequery);
            if($run_query){
                header("location:onlineorder.php");
            }else{
                header("location:onlineorder.php");
            }
        }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <title>Check Out Page</title>
</head>
<body>
    <!-- Nav -->
    <div class="logo-container">
        <img src="imgs/main-icon.png" style="height: 80px; width:80px;"  alt="">
        <h3 class="logo">Foodoo Delivery Service Myanmar</h3>
    </div>

    <div class="container">
        <section class="checkout-form">  
            <h2 class="heading">Complete your order</h2>
            <form action="" method="post">

            <div class="display-order">
                <?php
                    include("connection.php");
                   $display_query="SELECT * FROM cart";
                   $run_display=mysql_query($display_query);
                   $total=0;
                   $grand_total=0;
                   $final_totoal=0;
                   if(mysql_num_rows($run_display)>0){
                    while($fetch_display=mysql_fetch_assoc($run_display)){
                ?>
                    <span><?php echo $fetch_display['name'];?>(<?php echo $fetch_display['qty'];?>)</span>
                <?php
                        $result=$fetch_display['price']*$fetch_display['qty'];
                        $grand_total+=$result;
                        $tax=$grand_total*0.1;
                        $delifee=2500;
                        $final_totoal=$grand_total+$tax+$delifee;
                      }
                    }else{
                        echo "<div class='display-order'><span>There is no item selected in cart!</span></div>";
                    }
                ?>
                <span class="final_totoal">Total : <?php echo @$final_totoal;?>&nbsp;MMK</span>
            </div>

                <div class="flex">
                    <div class="inputbox">
                        <span>Your Name</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>

                    <div class="inputbox">
                        <span>Your Phone</span>
                        <input type="text" placeholder="enter your phone" name="phone" required>
                    </div>

                    <div class="inputbox">
                        <span>Your Email</span>
                        <input type="email" placeholder="enter your email" name="email" required>
                    </div>

                    <div class="inputbox">
                        <span>Payment Method</span>
                        <select name="p_method">
                            <option value="cash on delivery" selected>Cash on delivery</option>
                            <option value="card payment">Card Payment</option>
                        </select>
                    </div>

                    <div class="inputbox">
                        <span>Address Line 1:</span>
                        <input type="text" placeholder="e.g. flat" name="address-1" required>
                    </div>

                    <div class="inputbox">
                        <span>Address Line 2:</span>
                        <input type="text" placeholder="e.g. street & ward" name="address-2" required>
                    </div>

                    <div class="inputbox">
                        <span>City</span>
                        <input type="text" placeholder="e.g. Yangon" name="city" required>
                    </div>

                    <div class="inputbox">
                        <span>TownShip</span>
                        <input type="text" placeholder="e.g. kamryut" name="township" required>
                    </div>
                </div>
                <div class="button">
                    <table>
                        <tr>
                            <td><?php
                    $cancelq="SELECT * FROM `cart`";
                    $run_cancel=mysql_query($cancelq);
                    if($fetching=mysql_fetch_assoc($run_cancel));
                ?>
                <a href="checkout.php?remove=<?php echo $fetching['cart_id'];?>" class="cancel-btn">Cancel</a></td>
                <td> <input type="submit" value="order now" name="order-btn" class="order-bt"></td>
                        </tr>
                    </table>
                
               
                
                </div>
            </form> 
        </section>
    </div>
    <script src="js/cart.js"></script>
</body>
</html>