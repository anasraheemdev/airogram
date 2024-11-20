<?php 
include "./config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$img_name = $_FILES['post_img']['ppf'];
$temp_name = $_FILES['post_img']['tmp_name'];

move_uploaded_file($temp_name,"./post-img/$img_name");

session_start();




$query = "INSERT INTO register (name, email, phone, dob, password,profile_pic) VALUES ('{$name}','{$email}','{$phone}','{$dob}','{$password}','{$img_name}')" or die();

$run = mysqli_query($connection,$query);

$query2 = "SELECT * FROM register WHERE email = '{$email}' AND password = '{$password}' ";
$show = mysqli_query($connection,$query2);
$row = mysqli_fetch_assoc($show);

    $_SESSION['username'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['image'] = $row['profile_pic'];
    $_SESSION['success_login'] = "Welcome " . $row['name'];

$_SESSION['username'] = $name ;
echo $_SESSION['image'];
//header("Location: http://localhost/airogram/home.php")




?>