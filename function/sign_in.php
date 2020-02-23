<?php

require "connect.php";
require 'functions.php';

if (isset($_POST['submit'])) {

    $user_name = validator('user_name', 'signin.php');
    $password = validator('password', 'signin.php');

    $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (!mysqli_num_rows($result)) {
        header('Location: ../signin.php?error=login');
        exit();
    } else {

        autheticate(mysqli_fetch_assoc($result));
    }
} else {
    echo "error";
}

function autheticate($user)
{
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['user_name'] = $user['user_name'];
    header('Location: ../index.php');
}
