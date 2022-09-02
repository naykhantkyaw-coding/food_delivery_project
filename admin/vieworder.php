<?php
    session_start();
    include("connection.php");
    if(isset($_GET['done'])){
        $done_id=$_GET['done'];
        $done_query="DELETE FROM `order` WHERE order_id=$done_id";
        if(mysql_query($done_query)){
            header("location:vieworder.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" type="text/css" href="css/vieworder.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>View Order</title>
</head>
<body>
<?php include("header.php"); ?>
<div class="output_admin">
    Welcome
    <?php
        echo $_SESSION['admin'];
    ?>&nbsp;<span class="title">These are your Orders</span>
</div>
<div class="order-container">
        <section class="order-table">
            <table>
                <thead> 
                    <th>Order No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Payment Method</th>
                    <th>Address</th>
                    <th>Township</th>
                    <th>Order Item</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        include("connection.php");
                        $vieworder="SELECT * FROM `order`";
                        $qview_order=mysql_query($vieworder);
                        while($crow=mysql_fetch_assoc($qview_order)){
                    ?>
                        <tr>
                        <td><?php echo $crow['order_id']?></td>
                        <td><?php echo $crow['Name']?></td>
                        <td><?php echo $crow['Phone']?></td>
                        <td><?php echo $crow['Email']?></td>
                        <td><?php echo $crow['Pay_method']?></td>
                        <td><?php echo $crow['Address_1'].','.$crow['Address_2'].','.$crow['City']?></td>
                        <td><?php echo $crow['Township']?></td>
                        <td><?php echo $crow['Total_prod']?></td>
                        <td><?php echo $crow['Total_pric']?>&nbsp;MKK</td>
                        <td><a href="vieworder.php?done=<?php echo $crow['order_id'] ?>" class="done-btn" onclick="return confirm('Product is delivered!');"><span><i class="fas fa-clipboard-check"></i></span> Done</a>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>
        <script src="js/adminnav.js"></script>
</body>
</html>