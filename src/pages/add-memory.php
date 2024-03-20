<?php
$add_link = $_POST['add_link'];
$add_name = $_POST['add_name'];
session_start();
$user_id = $_SESSION['user_id'];

$conn = mysqli_connect("db", "root", "", "my_online_store");
$sql_insert_memory = "INSERT INTO `user_memories` (`user_id`, `memory_link`, `memory_name`) VALUES ('$user_id', '$add_link', '$add_name')";
$rs_insert_memory = mysqli_query($conn, $sql_insert_memory);

header("Location: user-dashboard.php");
exit();
