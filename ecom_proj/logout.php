<?php
session_start();
session_destroy(); //destroy login cridentials

header("location: home/login.php")
?>