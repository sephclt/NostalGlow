<?php
session_start();
$username = $_SESSION['username'];

$conn = mysqli_connect('localhost', 'root', '', 'my_online_store');
$sql = "UPDATE `profiles` SET `subscription` = 5 WHERE `username` = '$username'";
mysqli_query($conn, $sql);

$_SESSION['subscription'] = "Basic";

header("Location: user-dashboard.php");
exit();
