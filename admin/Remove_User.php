<?php

$link = mysqli_connect('localhost','root','','book');


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_user = "delete from user where id = '$id'";

    $run_delete = mysqli_query($link,$delete_user);

    if($run_delete){
        echo "<script>alert('User Removed')</script>";
        echo "<script>window.open('user.php','_self')</script>";
    }
}

?>