<?php
session_start();
function validator($value, $path)
{
    if (isset($_POST[$value]) && !empty($_POST[$value])) {
        return $_POST[$value];
    } else {
        header('Location: ../' . $path . '?error=empty&field=' . $value);
        exit();
    }
}

function isAuthenticate()
{

    if (isset($_SESSION['user_name'])) {
        return true;
    }
    return false;
}
