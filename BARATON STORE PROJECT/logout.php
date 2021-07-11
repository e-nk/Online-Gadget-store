<?php
include'common.php';

session_start();
if (!isset($_SESSION['user_name'])) {
    header('location: login.php');
}
session_unset();
session_destroy();
header('location: index.php');

?>

