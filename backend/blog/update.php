<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['cat_id'];
    $content = $_POST['content'];
    $ismonset = $_POST['is_monset'];
    $status = $_POST['status'];
    $video = $_POST['video'];
    $image = $_FILES['image'];

if(isset($_FILES['image']['name'])){
    $newname = "newimage".rand(0000, 9999)."blog.jpg";
    move_uploaded_file($_FILES['image']['tmp_name'],'../../uploads/'.$newname);
}

    $query = "UPDATE blog SET title='$title', description='$description', cat_id='$category', content='$content', is_monset='$ismonset', status='$status', video='$video', image='$newname' WHERE id='$id'";
    $result = mysqli_query($db, $query);
if ($result) {
        header("Location:../index.php?route=blog");
}
}
?>