<?php
session_start();
$username = $_SESSION['username'];

$conn = mysqli_connect('db', 'root', '', 'my_online_store');
$sql = "UPDATE `profiles` SET `subscription` = NULL WHERE `username` = '$username'";
mysqli_query($conn, $sql);

$_SESSION['subscription'] = 0;

header('Location: user-dashboard.php');
exit();
