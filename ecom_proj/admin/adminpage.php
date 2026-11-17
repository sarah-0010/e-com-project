<?php
session_start();
if(!isset($_SESSION['user_email'])){
    header("location:../home/login.php");
}

else if($_SESSION['usertype'] == "user") {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Ecom Admin</h2>
            <ul>
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li>
                    <a href="">Users</a>
                </li>
                <li>
                    <a href="addProduct.php">Add Products</a>
                </li>
                <li>
                    <a href="display_product.php">View Products</a>
                </li>
            </ul>
        </div>

        <div class="header">
            <div class="admin_header">
                <a href="../logout.php">Logout</a>
            </div>

            <div class="info">
                <p>This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .                         This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                   This is just a random text. For decoration purposes only. It is supposed to be a few lines so i will copy the content and repeat it .
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>