<?php
include_once "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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


    $query = "INSERT INTO blog(title, description, cat_id, content, is_monset, status, image, video) VALUES ('$title','$description','$category','$content','$ismonset', '$status', '$newname', '$video')";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=blog");
    }

}

?>