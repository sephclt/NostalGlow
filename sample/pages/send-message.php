<?php
session_start();

$sender_email = $_POST['sender_email'];
$sender_message = $_POST['sender_message'];

$conn = mysqli_connect("localhost", "root", "", "my_online_store");
$sql = "INSERT INTO `messages` (`sender_email`, `sender_message`) VALUES ('$sender_email', '$sender_message')";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: ../index.php");
  echo "<script>alert('Message sent successfully!')</script>";
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
