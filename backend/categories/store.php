<?php
include_once "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $ismenu = $_POST['is_menu'];
    $status = $_POST['status'];
    
    
    $query = "INSERT INTO categories (title, is_menu, status) VALUES ('$title','$ismenu','$status')";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=categories");
    }

}

?>