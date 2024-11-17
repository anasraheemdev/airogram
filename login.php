<?php
session_start();
include "./config.php";
$email = $_POST['email_lg'];
$password = $_POST['pass_lg'];

$query = "SELECT * FROM register WHERE email = '{$email}' AND password = '{$password}' ";
$run = mysqli_query($connection, $query);

//chechk whether the User exists or not


// Check 1 Method

if (mysqli_num_rows($run) > 0)
// yahan per we are checking the number of rows existing, agar there are more than zero rows then users exists and we will permit the user to visit Home ppage
{
    $row = mysqli_fetch_assoc($run);

    $_SESSION['username'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['image'] = $row['profile_pic'];
    $_SESSION['success_login'] = "Welcome " . $row['name'];
    header("Location: https://localhost/airogram/home.php");
} else {
    $_SESSION['login_error'] = "Invaid Credebtials";
    header("Location: https://localhost/airogram/home.php");
}
