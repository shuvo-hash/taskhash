<?php
require "function/functions.php";

if (isAuthenticate()) {
    header('Location: dashboard.php');
    exit();
} else {
    header('Location: signin.php');
    exit();
}
