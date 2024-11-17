<?php 
include "./config.php";
$caption = $_POST['capion'];
$img_name = $_FILES['post_img']['name'];
$temp_name = $_FILES['post_img']['tmp_name'];

move_uploaded_file($temp_name,"./post-img/$img_name");

$insert = "INSERT INTO posts (image,caption) VALUES ('{$img_name}','{$caption}')";

mysqli_query($connection,$insert);

$_SESSION['datainserted'] = "Congratulations Data Inserted Successfully";

?>