<?php
    session_start();
    if(!isset($_SESSION['user_email'])){
        header("location:../home/login.php");
    }

    else if($_SESSION['usertype'] == "user") {
        header("location:login.php");
    }

    $conn = mysqli_connect("localhost","root","","php_ecom");

    $p_id = $_GET['id'];

    $sql ="SELECT * from product where id='$p_id' ";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update_product'])){

        $p_title = $_POST['title'];
        $p_des = $_POST['description'];
        $p_price = $_POST['price'];
        $p_qty = $_POST['qty'];

        $image_name = $_FILES['my_image']['name'];

        if($image_name){
        
            $tmp = explode(".",$image_name); 
            $newfilename = round(microtime(true)).'.'.end($tmp);
            $uploadpath = "../product_image/".$newfilename ;
            move_uploaded_file($_FILES['my_image']['tmp_name'], $uploadpath);

            $update_sql = "UPDATE product set title='$p_title', description='$p_des',
                        price='$p_price', quantity='$p_qty', image='$newfilename' where id ='$p_id'";

            $data = mysqli_query($conn,$update_sql);

            if($data){
                header("location:display_product.php");
            }

        }

        else{

            $update_sql = "UPDATE product set title='$p_title', description='$p_des',
                            price='$p_price', quantity='$p_qty' where id ='$p_id'";

            $data = mysqli_query($conn,$update_sql);

            if($data){
                header("location:display_product.php");
            }

        }

        
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
                <h1>Update Page</h1>

                <div class="my_form">
                <form action=""  method="POST" enctype="multipart/form-data">
                    <div class="div_deg">
                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $row['title'] ?>">
                    </div>

                    <div class="div_deg">
                        <label for="">Description</label>
                        <textarea name="description" id=""><?php echo $row['description']?>
                        </textarea>
                    </div>

                    <div class="div_deg">
                        <label for="">Price</label>
                        <input type="number" name="price" value="<?php echo $row['price'] ?>">
                    </div>

                    <div class="div_deg">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" value="<?php echo $row['quantity'] ?>">
                    </div>

                    <div>
                        <label for="">Current Image</label>
                        <img height="80" width="80" src="../product_image/<?php echo $row['image']?>" alt="">
                    </div>

                    <div class="div_deg">
                        <label for="">Change Image</label>
                        <input type="file" name="my_image" value="<?php  echo $row['image'] ?>">
                    </div>

                    <div class="div_deg">
                        <input type="submit" class="upd_btn" name="update_product" value="Update Product">
                    </div>


                </form>
            </div>
        
            </div>
        </div>
    </div>
    
</body>
</html>