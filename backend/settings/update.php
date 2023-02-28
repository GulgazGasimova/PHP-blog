<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $key = $_POST['_key'];
    $value = $_POST['value'];
    $status = $_POST['status'];

    $query = "UPDATE settings SET _key='$key', value='$value', status='$status' WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=settings");
    }

}