<?php
error_reporting(1);
 @include('connection.php');
if(isset($_POST['adding'])){
    $food_name=$_POST['prod_name'];
    $food_price=$_POST['prod_price'];
    $food_text=$_POST['food_text'];
    
    $food_img=$_FILES['prod_img']['name'];
    $food_img_tmp_name=$_FILES['prod_img']['tmp_name'];
    $img_folder='product/'.$food_img;

    $query="INSERT INTO products VALUES ('','$food_name','$food_price','$food_img','$food_text')";
    if(mysql_query($query)){
        move_uploaded_file($food_img_tmp_name, $img_folder);
    }
}

if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query="DELETE FROM products WHERE prod_id=$delete_id";
    if(mysql_query($delete_query)){
      header("loctaion:addproduct.php");
    }
}


    if(isset($_POST['update_btn'])){
        $up_id=$_POST['update_id'];
        $up_name=$_POST['update_name'];
        $up_price=$_POST['update_price'];
        $up_food_text=$_POST['up_text'];
        $up_img=$_FILES['up_img']['name'];
        $up_img_tmp_name=$_FILES['up_img']['tmp_name'];
        $up_img_folder='product/'.$up_img;
        $up_quary="UPDATE products SET prod_name='$up_name',prod_price='$up_price',prod_img='$up_img',prod_text='$up_food_text' WHERE prod_id='$up_id'";
        if(mysql_query($up_quary)){
            $message[]="update pass";
            header("location:addproduct.php");
        }else{
            $message[]="pudate fail";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Products</title>
</head>
<body>
    <?php
        if(isset($message)){
            foreach($message as $message1){
                echo '<div class="message"><span>'.$message1.'</span><i class="fas fa-times" onclick="this.parentElement.style.display=`none`;"></i></div>';
            }
        }
    ?>
    <?php include("header.php"); ?>
    <div class="showmessge"></div>
    <div class="container">
        <section>
            <form method="post" enctype="multipart/form-data" class="add-product-form">
                <h3>add product</h3>
                <input type="text" class="box" placeholder="Enter Product Name" name="prod_name" required>
                <input type="number" class="box" min="0" class="prod-price" placeholder="Enter Product price" name="prod_price" required>
                <input type="file" class="box" accept="image/png,image/jpg,image/jpeg" name="prod_img" required>
                <textarea name="food_text" class="box"  cols="10" rows="5" placeholder="Enter food discription here" required></textarea>
                <input type="submit" value="add the product" name="adding" class="btu-add">
            </form>
        </section>

        <section class="product-dispaly">
            <table>
                <thead>
                    <th>product image</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>product Detail</th>
                    <th>action</th>
                </thead>
                <tbody>
                    <?php
                        $viewquery="SELECT * FROM products";
                        $test=mysql_query($viewquery);
                        while($row=mysql_fetch_assoc($test)){      
                    ?>
                        <tr>
                            <td><img src="product/<?php echo $row['prod_img']; ?>" alt="" heigt="100px" width="100px"></td>
                            <td><?php echo $row['prod_name']?></td>
                            <td><?php echo $row['prod_price']." MMK"?></td>
                            <td><?php echo $row['prod_text']?></td>
                            <td><a href="addproduct.php?delete=<?php echo $row['prod_id'] ?>" class="delete-btn" onclick="return confirm('are you sure you want to delete?');"><i class="fas fa-trash"></i>delete</a>
                            <a href="addproduct.php?edit=<?php echo $row['prod_id'] ?>" class="option-btn"><i class="fas fa-edit"></i>update</a>
                            </td>
                        </tr>

                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </section>
        <section class="edit-form">
            <?php
                if(isset($_GET['edit'])){
                    $edit_id=$_GET['edit'];
                    $edit_query="SELECT * FROM products WHERE prod_id=$edit_id";
                    $edit_run=mysql_query($edit_query);
                    while($edit_spn=mysql_fetch_assoc($edit_run)){
            ?>

                        <form method="post" enctype="multipart/form-data" class="testing">
                            <img src="product/<?php echo $edit_spn['prod_img']?>" heigh="100px" width="100px" alt="">
                            <input type="hidden" name="update_id" value="<?php echo $edit_spn['prod_id']?>">
                            <input type="text" class="box" required name="update_name" value="<?php echo $edit_spn['prod_name']?>">
                            <input type="number" min="0" class="box" required name="update_price" value="<?php echo $edit_spn['prod_price']?>">
                            <input type="file" class="box" accept="image/png,image/jpg,image/jpeg" name="up_img" required>
                            <textarea name="up_text" class="box" cols="2" rows="2" placeholder="<?php echo $edit_spn['prod_text']?>" required></textarea>
                            <input type="submit" name="update_btn" class="btu-add" value="update the product" >
                            <input type="reset" id="close-edit" class="option-btn" value="cancel" >
                        </form>

            <?php
                   
                    }                
                }
            ?>
        </section>
    </div>
    <script src="js/adminnav.js"></script>
</body>
</html>