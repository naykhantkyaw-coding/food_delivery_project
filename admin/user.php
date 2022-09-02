<?php
    include("connection.php");
    if(isset($_GET['delete'])){
        $done_id=$_GET['delete'];
        $done_query="DELETE FROM `signup` WHERE sing_up_id=$done_id";
        if(mysql_query($done_query)){
            header("location:user.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>User</title>
</head>
<body>
<?php include("header.php"); ?>
<div class="title">
    Users
</div>
<div class="user_container">
    <section class="user_table">
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Prof_img</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </thead>
            <tbody>
                    <?php
                        include("connection.php");
                        $viewuser="SELECT * FROM `signup`";
                        $qview_user=mysql_query($viewuser);
                        while($crow=mysql_fetch_assoc($qview_user)){
                    ?>
                        <tr>
                        <td><?php echo $crow['sing_up_id']?></td>
                        <td><?php echo $crow['Name']?></td>
                        <td><?php echo $crow['Email']?></td>
                        <td><?php echo $crow['Phone']?></td>
                        <td><img src="../profile/<?php echo $crow['Prof_img']; ?>" style="height:100px; width:100px; border-radius:.5rem;"></td>
                        <td><?php echo $crow['Address']?></td>
                        <td><?php echo $crow['Gender']?></td>
                        <td><a href="user.php?delete=<?php echo $crow['sing_up_id'] ?>" class="done-btn" onclick="return confirm('Are you sure to delete user?');"><span><i class="fas fa-delete"></i></span> Delete</a>
                    <?php
                        }
                    ?>
                </tbody>
        </table>
    </section>
</div>
<script src="js/adminnav.js"></script>
</body>
</html>