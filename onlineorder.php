<?php
    session_start();
    include("connection.php");
    if(isset($_POST['cart_btn'])){
        $prod_name=$_POST['prod_name'];
        $prod_price=$_POST['prod_price'];
        $prod_img=$_POST['prod_img'];
        $prod_qty=1;
        $quary_cart="SELECT * FROM cart WHERE name='$prod_name'";
        $cart_run=mysql_query($quary_cart);
        if(mysql_num_rows($cart_run)>0){
            echo "<script>alert('Food is already added!')</script>";
        }else{
            $insert_cart="INSERT INTO cart VALUES ('','$prod_name','$prod_price','$prod_img','$prod_qty')";
            if(mysql_query($insert_cart)){
                header("location:onlineorder.php");
            echo "<script>alert('Food is added to cart!')</script>";
           
            }
        }

    }
?>

<?php
    if(isset($_POST['update-qty-btn'])){
        $update_qty=$_POST['update_qty'];
        $update_id=$_POST['update_qty_id'];
        $qty_upquery="UPDATE cart SET qty='$update_qty' WHERE cart_id='$update_id'";
        $run_qty_up=mysql_query($qty_upquery);
        if($run_qty_up){
            header("location:onlineorder.php");
        }
    }

    if(isset($_GET['remove'])){
        $remove_id=$_GET['remove'];
        $remove_query="DELETE FROM cart WHERE cart_id='$remove_id'";
        $run_remove=mysql_query($remove_query);
        if($run_remove){
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
    <link rel="stylesheet" type="text/css" href="css/onlineorder.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Online Order</title>
</head>
<body>
    <?php
        $count_q="select count(*) FROM cart";
        $resule=mysql_query($count_q);
        $final=mysql_fetch_array($resule);
        $total=$final[0];
    ?>
    <!-- navbar -->
    <div class="logo-container">
        <img src="imgs/main-icon.png" style="height: 80px; width:80px;"  alt="">
        <h3 class="logo">Foodoo Delivery Service Myanmar</h3>
        <h3 id="cart-logo" class="fas fa-shopping-cart"><span class="cart-num"><?php echo $total;?></span></h3>
    </div>
    <!-- Side bar-->
   <div class="sidebar">
    <div class="sidebar-menu">
         <span class="fas fa-home"></span>
         <a href="index.php">Home</a>
     </div>
     <div class="sidebar-menu">
         <span class="fas fa-user"></span>
         <a href="profile.php">Profile</a>
     </div>
    </div>
    <!-- dash bord -->
    <div class="dashboard">
        <div class="dashborde-cover">
            <img src="imgs/dash-banner.jpg" alt="">
        </div>
        <div class="dash-text"><h3>Fresh and Tastey Food <br><span>50% discount<br>on Your Hand</span></h3></div>

        <div class="dash-card-content">

             <?php
                include("connection.php");
                $show="SELECT * FROM products";
                $show_run=mysql_query($show);
                while($show_prod=mysql_fetch_assoc($show_run)){
            ?>
                
                <div class="deshbord-card">
                <form action="" method="post" enctype="multipart/form-data">
                <img src="admin/product/<?php echo $show_prod['prod_img'];?>" alt="" class="card-img">
                <div class="card-detail">
                    <h4><?php echo $show_prod['prod_name'];?> <span class="food-price"><?php echo $show_prod['prod_price'];?>MMK</span></h4>
                    <p class="card-info"><?php echo $show_prod['prod_text']?></p>
                    <input type="hidden" name="prod_name" value="<?php echo $show_prod['prod_name']?>">
                    <input type="hidden" name="prod_price" value="<?php echo $show_prod['prod_price']?>">
                    <input type="hidden" name="prod_img" value="<?php echo $show_prod['prod_img']?>">
                    <p class="card-time"><span class="fas fa-clock"></span>20-45 mins<input type="submit" class="add-cart" name="cart_btn" value="Buy"></p>
                </div>
                </form>
            </div>
            <?php
                 }
            ?>

        </div>
    
    </div> 
    <!-- order dash -->
    <div class="order-container">
       <div class="sub-container">
            <h3 class="order-title">Order Menue</h3>
            <div class="orderwapper">
                <?php
                    $cart_q="SELECT * FROM cart";
                    $cart_run=mysql_query($cart_q);
                    $grand_total=0;
                    if(mysql_num_rows($cart_run)>0){
                        while($fat_cart=mysql_fetch_assoc($cart_run)){
                ?>  
                
                <form method="post" enctype="multipart/form-data">
                <div class="order-card">
                    <img src="admin/product/<?php echo $fat_cart['img'];?>" class="order-img">
                    <div class="order-detail">
                        <h4 style="font-weight:bold;"><?php echo $fat_cart['name'];?> special dish...</h4>
                        <i class="fas fa-times"></i><input class="amount" name="update_qty" min="1" type="number" value="<?php echo $fat_cart['qty'];?>">
                        <input type="hidden" name="update_qty_id" value="<?php echo $fat_cart['cart_id'];?>" >
                        <input type="submit" name="update-qty-btn" class="update_btn" value="update">
                        <a href="onlineorder.php?remove=<?php echo $fat_cart['cart_id'];?>" class="remove_btn" onclick="return confirm('are you shure to remove?');">remove</a>
                        
                    </div>
                    <h4 class="order-price"><?php  echo number_format($fat_cart['price']);?>&nbsp;MMK</h4>
                </div>  
                </form>

                <?php
                        $result=$fat_cart['price']*$fat_cart['qty'];
                        $grand_total+=$result;
                        $tax=$grand_total*0.1;
                        $delifee=2500;
                        $final_totoal=$grand_total+$tax+$delifee;
                       }
                    }
                ?>
            </div>

            <hr class="diveder">
                <div class="total_out">
                <p>Sub Total <span><?php echo number_format(@$grand_total); ?>&nbsp;MMK</span></p>
                <p>Tax (10%) <span><?php echo number_format(@$tax); ?>&nbsp;MMK</span></p>
                <p>Deli Fee <span><?php echo number_format(@$delifee); ?>&nbsp;MMK</span></p>
                <hr class="diveder">
                <p>Total<span class="final_t"><?php echo number_format(@$final_totoal); ?>&nbsp;MMK</span></p>
                <a href="checkout.php" class="btn-check">check out</a>
                </div>
        </div>
    </div>

                    
    <script src="js/cart.js"></script>
</body>
</html>


