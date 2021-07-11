<?php

include'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items1(user_id, item_id, status) VALUES('$user_id', '$item_id', 'added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: home.php');
}


