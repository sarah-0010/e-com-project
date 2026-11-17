<?php
$conn = mysqli_connect("localhost","root","","php_ecom");

if(isset($_POST['register'])){
    $u_name = $_POST['name'];
    $u_email = $_POST['email'];
    $u_phone = $_POST['phone'];
    $u_address = $_POST['address'];
    $u_pass = $_POST['password'];
    $usertype = "user";

    $sql = "INSERT INTO users (name,email,password,phone,address,usertype) 
            Values ('$u_name', '$u_email', '$u_pass', '$u_phone', '$u_address', '$usertype')";

    $data = mysqli_query($conn,$sql); // it means we were able to successfully upload the data to the table

    if($data){
        echo "Register success ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registor Page</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <div class="my_form">

        <h2>Register Form</h2>

        <form action="" method="POST">
            <div class="input_deg">
                <label for="">Name :</label>
                <input type="text" name="name">
            </div>

            <div class="input_deg">
                <label for="">Email :</label>
                <input type="email" name="email">
            </div>

            <div class="input_deg">
                <label for="">Phone : </label>
                <input type="number" name="phone">
            </div>

            <div class="input_deg">
                <label for="">Address :</label>
                <input type="text" name="address">
            </div>

            <div class="input_deg">
                <label for="">Password : </label>
                <input type="password" name="password">
            </div>

            <div class="input_deg">
                <input type="submit" name="register" value="register">
            </div>


        </form>
    </div>
    
</body>
</html>