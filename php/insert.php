<?php

include '../connection/config.php';

if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['phone']) ||isset($_POST['dob'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];

    $sql="INSERT INTO students (name,email,phone,date_of_birth) VALUES('{$name}','{$email}','{$phone}','{$dob}')";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }else{
        echo 0;
    }

}
