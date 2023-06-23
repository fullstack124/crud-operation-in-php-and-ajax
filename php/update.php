<?php

include '../connection/config.php';

if (isset($_POST['name']) || isset($_POST['id']) || isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['dob'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    $sql = "UPDATE  students SET  name='{$name}',email='{$email}',phone='{$phone}',date_of_birth='{$dob}' WHERE id='{$id}'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 0;
    }
}
