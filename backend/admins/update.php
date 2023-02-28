<?php

include "../../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    $password = $_POST['password'];
    if (!empty($password)) {
        $password = md5($password);
        $query = "UPDATE  admin SET name='$name', surname='$surname', username='$username', email='$email', password='$password', status='$status' WHERE id='$id'";
    } else {
        $query = "UPDATE  admin SET name='$name', surname='$surname', username='$username', email='$email', status='$status' WHERE id='$id'";
    }

    $result = mysqli_query($db, $query);
    if ($result) {
        header("Location:../index.php?route=admins");
    }

}