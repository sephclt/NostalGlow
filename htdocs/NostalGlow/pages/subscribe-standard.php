<?php
session_start();
$username = $_SESSION['username'];

$conn = mysqli_connect('localhost', 'root', '', 'my_online_store');
$sql = "UPDATE `profiles` SET `subscription` = 6 WHERE `username` = '$username'";
mysqli_query($conn, $sql);

$_SESSION['subscription'] = "Standard";

header("Location: user-dashboard.php");
exit();
