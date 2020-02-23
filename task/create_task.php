<?php

require "../function/connect.php";

session_start();

if (isset($_POST['create'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $deadline = $_POST['deadline'];
    $user_id = $_SESSION['id'];

    $query = "INSERT INTO task(user_id, title , description, priority, status, deadline ) ";
    $query .= "VALUES ('','$title', '$description', '$priority', '$status', '$deadline' ) ";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("connection failed " . mysqli_error($conn));
    }
}
