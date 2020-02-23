<?php
require 'connect.php';
require 'functions.php';

if (isset($_POST['submit'])) {

    $user_name = validator('user_name', 'signup.php');
    $email = validator('email', 'signup.php');
    $password = validator('password', 'signup.php');
    $confirm_password = validator('confirm_password', 'signup.php');

    if ($password != $confirm_password) {
        header('Location: ../signup.php?error=not_matched');
        exit();
    }



    $query = "INSERT INTO users(user_name , email , password) ";
    $query .= "VALUES ('$user_name' , '$email',  '$password')";

    if (!mysqli_query($conn, $query)) {
        echo 'Something is wrong';
    } else {
        header('Location: ../index.php');
    }
}
