<?php
require 'database.php';
session_start();
ob_start();

if (!(isset($_SESSION['admin_user_id']))){
    header("location:index.php");
}
else {

    $id = $_GET['id'];
    echo $id;

    $result = mysqli_query($conn,"update `user_blog` set `blog_deleted`=now() WHERE `post_id`='$id'");

    var_dump($result);

    header("Location:post_report.php");
}
?>

