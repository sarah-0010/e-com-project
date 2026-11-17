<?php
session_start();

if(!isset($_SESSION['user_email'])){
    header("location:home/login");
    //to avoid bypassing without logining in from the url
    // it will show an error
}

else if($_SESSION['usertype'] == "admin") {
    header("location:login.php");
    // in the url when we type ecom_proj/admin/admin.php
    // if i am a user it will redirect me to the login page
    // this is used for redirection instead of error
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>THis is user page</h1>
    
</body>
</html>