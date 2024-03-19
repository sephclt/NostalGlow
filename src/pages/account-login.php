<?php
session_start();
$password = $email = '';
$conn = mysqli_connect('db', 'root', '', 'my_online_store');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST["password"];
  $email = $_POST["email"];
}

$sub_id = 0;
$sub = "";

$email = mysqli_real_escape_string($conn, $email);
$sql = "SELECT `password`, `username`, `subscription` FROM `profiles` WHERE `email` = '$email'";
$rs = mysqli_query($conn, $sql);

if (!$rs) {
  die('Error: ' . mysqli_error($conn));
}

$row = mysqli_fetch_row($rs);

mysqli_free_result($rs);

if ($row[2] != NULL) {
  $sub_id = $row[2];
  $sql = "SELECT `item_name` FROM `products` WHERE `subscription` = '$sub_id'";
  $rs = mysqli_query($conn, $sql);
  $sub = mysqli_fetch_row($rs);
}

if ($sub_id == 0) {
  $sub = "No Subscription";
}

if ($row[0] == $password) {
  $_SESSION['username'] = $row[1];
  $_SESSION['subscription'] = $sub;
  header("Location: user-dashboard.php");
  exit();
} else {
  $page_message = "Invalid Password";
  $button_text = "Try Again";
  $button_link = "./account-login.html";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Created</title>
  <link href="../style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid position-fixed top-0">

    <!--Top Navbar-->
    <div class="row ng-bg-black ng-border-bottom">
      <div class="col px-5 py-3">
        <h5 class="ng-text-red fw-bold">01</h5>
        <a href="../index.html#main-content" class="h3 text-white fw-bold home-nav" id="home-nav">Home</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-yellow fw-bold">02</h5>
        <a href="../index.html#about-content" class="h3 text-white fw-bold about-nav" id="about-nav">About</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-green fw-bold">03</h5>
        <a href="../index.html#features-content" class="h3 text-white fw-bold features-nav" id="features-nav">Features</a>
      </div>
    </div>

  </div>

  <div class="container-fluid position-fixed bottom-0">

    <!-- Bottom Navbar -->
    <div class="row ng-bg-black ng-border-top">
      <div class="col px-5 py-3">
        <h5 class="ng-text-blue fw-bold">04</h5>
        <a href="../index.html#main-content" class="h3 text-white fw-bold pricing-nav" id="pricing-nav">Pricing</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-purple fw-bold">05</h5>
        <a href="../index.html#resources-content" class="h3 text-white fw-bold resources-nav" id="resources-nav">Resources</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-orange fw-bold">06</h5>
        <a href="../index.html#main-content" class="h3 text-white fw-bold career-nav" id="career-nav">Career</a>
      </div>
    </div>

  </div>

  <!--Main Content-->
  <div class="container-fluid vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white" id="main-content">

    <div class="row text-center">
      <h1 class="display-5 fw-bold"><?php echo $page_message; ?></h1>
      <button class="btn btn-primary" onclick="window.location.href='<?php echo $button_link ?>'"><?php echo $button_text ?></button>
    </div>

  </div>

</body>

</html>
