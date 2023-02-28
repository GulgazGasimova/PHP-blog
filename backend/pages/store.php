<?php
include_once "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $ismenu = $_POST['is_menu'];
    $status = $_POST['status'];
    

    $query = "INSERT INTO pages (title, description, content, is_menu, status) VALUES ('$title','$description','$content','$ismenu','$status')";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=pages");
    }

}

?>