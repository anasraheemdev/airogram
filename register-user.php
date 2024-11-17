<?php 
include "./config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$password = $_POST['password'];

session_start();




$query = "INSERT INTO register (name, email, phone, dob, password) VALUES ('{$name}','{$email}','{$phone}','{$dob}','{$password}')" or die();

$run = mysqli_query($connection,$query);

$query2 = "SELECT * FROM register WHERE email = '{$email}' AND password = '{$password}' ";
$show = mysqli_query($connection,$query2);
$row = mysqli_fetch_assoc($show);

    $_SESSION['username'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['image'] = $row['profile_pic'];
    $_SESSION['success_login'] = "Welcome " . $row['name'];

$_SESSION['username'] = $name ;

header("Location: http://localhost/airogram/home.php")




?>