<?php
session_start();
error_reporting(0);

$conn = mysqli_connect("localhost", "root","","php_ecom");

if(isset($_POST['login']) ){
    $u_email = $_POST['email'];
    $u_pass = $_POST['password'];

    $sql = "SELECT * from users Where email ='".$u_email."' AND password ='".$u_pass."' ";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    if($row['usertype'] == "user"){
        $_SESSION['user_email'] = $u_email; // this is for security 
        // what will happen is whenever someone gives input this email address will be stored in this variable
        // and therefore the user cannot access the admin page by the url
        $_SESSION['usertype'] = "user";
        header("location:userpage.php");
    }

    else if($row['usertype'] == "admin"){
        header("location:../admin/adminpage.php");
        $_SESSION['user_email'] = $u_email;
        $_SESSION['usertype'] = "admin";
    }

    else{
        $_SESSION['message'] = "Username or Password is wrong";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="my_form">

        <h2> 
            <?php
                echo $_SESSION['message'];
            ?>
        </h2>

        <h2>Login Form</h2>

        <form action="" method="POST">
            <div class="input_deg">
                <label for="">Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input_deg">
                <label for="">Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="input_deg">
                <input type="submit" value="login" name="login" required>
            </div>
        </form>
    </div>
    
</body>
</html>