<?php
session_start();
$password = $email = '';
$conn = mysqli_connect('db', 'root', '', 'my_online_store');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST["password"];
  $email = $_POST["email"];
}

$email = mysqli_real_escape_string($conn, $email);
$sql = "SELECT `password`, `username` FROM `profiles` WHERE `email` = '$email'";
$rs = mysqli_query($conn, $sql);

if (!$rs) {
  die('Error: ' . mysqli_error($conn));
}

$row = mysqli_fetch_row($rs);

if ($row[0] == $password) {
  // $page_message = "Login Successful";
  // $button_text = "Go Back";
  // $button_link = "../index.html#main-content";
  $_SESSION['username'] = $row[1];
  header("Location: user-dashboard.php");
  exit();
} else {
  $page_message = "Invalid Password";
  $button_text = "Try Again";
  $button_link = "./account-login.html";
}
