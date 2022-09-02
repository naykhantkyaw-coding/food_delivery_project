<?php
    include("connection.php");
    if(isset($_GET['remove'])){
        $remove_id=$_GET['remove'];
        $remove_query="DELETE FROM contact WHERE contact_id=$remove_id";
        if(mysql_query($remove_query)){
            echo "<script>alert('Remove Done')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css"href="css/product.css">
    <link rel="stylesheet"type="text/css"href="css/feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Feedback Page</title>
</head>
<body>
    
    <?php
        include("header.php");
    ?>
    <div class="title">
        Feedbacks
    </div>
    <div class="feedback-container">
        <section class="feedback-table">
            <table>
                <thead> 
                    <th>No</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        include("connection.php");
                        $viewfbq="SELECT * FROM contact";
                        $qview_run=mysql_query($viewfbq);
                        while($crow=mysql_fetch_assoc($qview_run)){
                    ?>
                        <tr>
                        <td><?php echo $crow['contact_id']?></td>
                        <td><?php echo $crow['Name']?></td>
                        <td><?php echo $crow['Subject']?></td>
                        <td><?php echo $crow['Email']?></td>
                        <td><?php echo $crow['Phone']?></td>
                        <td><?php echo $crow['Message']?></td>
                        <td><a href="feedback.php?remove=<?php echo $crow['contact_id'] ?>" class="delete-btn" onclick="return confirm('are you sure you want to remove?');"><i class="fas fa-trash"></i>Remove</a>
                        </tr>
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