<?php

    $conn = mysqli_connect("localhost","root","","php_ecom");
    $sql = "SELECT * from product";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>

        <label class="my_logo">My Ecom</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>

            <li>
                <a href="">Products</a>
            </li>

            <li>
                <a href="">Contact</a>
            </li>

            <li>
                <a href="home/register.php">Register</a>
            </li>

            <li>
                <a href="home/login.php">Login</a>
            </li>
        </ul>
    </nav>

    <div>
        <img src="images/cover.png" class="my_cover">
    </div>

    <div>
        <h3 class="p_title">Products</h3>
    </div>
    <div class="my_card">

    <?php
        while($row=mysqli_fetch_assoc($result)){

    ?>

    <div class="card">
            <img class="p_image" src="product_image/<?php echo $row['image']?>" alt="">
            <h4><?php echo $row['title']?></h4>
            <p><?php echo $row['description']?></p>
            <p>Price: <?php echo $row['price']?></p>
            <a href="">Buy Now</a>
    </div>


    <?php
    }
    ?>


    </div>

    <div class="footer">

        <div class="footer_title">
            <h3>My Ecom</h3>
        </div>

        <div class="footer_content">
            <div>
                <h4>Services</h4>
                <p>
                    <a href="#">Web Development</a>
                </p>
                <p>
                    <a href="#">App Development</a>
                </p>
                <p>
                    <a href="#">Digital Marketing</a>
                </p>

            </div>

            <div>
                <h4>Social Links</h4>
                <p>
                    <a href="#">Instagram</a>
                </p>
                <p>
                    <a href="#">Facebook</a>
                </p>
                <p>
                    <a href="#">Twitter</a>
                </p>

            </div>

            <div>
                <h4>Quick Links</h4>
                <p>
                    <a href="#">Home</a>
                </p>
                <p>
                    <a href="#">Products</a>
                </p>
                <p>
                    <a href="#">Contact</a>
                </p>
                <p>
                    <a href="#">Register</a>
                </p>
                <p>
                    <a href="#">Login</a>
                </p>
            </div>

            <div>
                <h4>Location</h4>
                <p>
                    Wester union street, house 27
                </p>
                <p>
                    Email : myecom@gmail.com
                </p>
                <p>
                    Phone : 76126247
                </p>
            </div>

        </div>
        <footer>
            <hr/>
            <h3>Copyrigt @sararoumani 2026</h3>
        </footer>
    </div>
    
    
</body>
</html>