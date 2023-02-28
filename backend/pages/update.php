<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $ismenu = $_POST['is_menu'];
    $status = $_POST['status'];

   
    $query = "UPDATE pages SET title='$title', description='$description', content='$content', is_menu='$ismenu', status='$status' WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=pages");
}
 
}

?>