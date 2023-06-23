<?php

include '../connection/config.php';

if(isset($_POST['id'])){
    $id=$_POST['id'];

    $sql="DELETE FROM students WHERE id='{$id}'";
    $run_sql=mysqli_query($conn,$sql);
    if($run_sql){
        echo 1;
    }else{
        echo 0;
    }
}

?>