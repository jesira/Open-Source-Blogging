<?php
require 'database.php';
session_start();
ob_start();

$sql="UPDATE `user_blog` 
  SET `likes_count` = `likes_count` + 1 
  WHERE `post_id` = '" . $_SESSION['post_id'] . "'";


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

header('Location: ' . $_SESSION['return_to_readMore']);


?>