<?php

$server = 'localhost';
$user_name = 'root';
$user_pass = '';
$database_name = 'taskhash';

$conn = mysqli_connect($server, $user_name, $user_pass, $database_name);

if (!$conn) {
    die('connection failled');
}
