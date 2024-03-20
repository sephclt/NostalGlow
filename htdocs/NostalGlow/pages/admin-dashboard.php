<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'my_online_store');

$products = $profiles = array();

$sql_products = "SELECT * FROM `products`";
$rs = mysqli_query($conn, $sql_products);

if (!$rs) {
  die('Error: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($rs)) {
  $products[] = $row;
}

mysqli_free_result($rs);
?>
<!DOCTYPE html>
<html>

<head>
  <title>User Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <!-- PHP Script -->
  <?php
  $username = $_SESSION['username'];
  ?>

  <div class="container-fluid position-fixed top-0">

    <!--Top Navbar-->
    <div class="row ng-bg-black ng-border-bottom">
      <div class="col px-5 py-3">
        <h5 class="ng-text-red fw-bold">01</h5>
        <a href="../index.php#main-content" class="h3 text-white fw-bold home-nav" id="home-nav">Home</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-yellow fw-bold">02</h5>
        <a href="../index.php#about-content" class="h3 text-white fw-bold about-nav" id="about-nav">About</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-green fw-bold">03</h5>
        <a href="../index.php#features-content" class="h3 text-white fw-bold features-nav" id="features-nav">Features</a>
      </div>
    </div>

  </div>

  <div class="container-fluid position-fixed bottom-0">

    <!-- Bottom Navbar -->
    <div class="row ng-bg-black ng-border-top">
      <div class="col px-5 py-3">
        <h5 class="ng-text-blue fw-bold">04</h5>
        <a href="./pages/pricing.php" class="h3 text-white fw-bold pricing-nav" id="pricing-nav">Pricing</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-purple fw-bold">05</h5>
        <a href="../index.php#resources-content" class="h3 text-white fw-bold resources-nav" id="resources-nav">Resources</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-orange fw-bold">06</h5>
        <a href="../index.php#main-content" class="h3 text-white fw-bold career-nav" id="career-nav">Career</a>
      </div>
    </div>

  </div>

  <!-- Dashboard Content -->
  <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white">
    <div class="row container-xl g-3">

      <!-- First Row -->
      <div class="col-12">
        <div class="bg-dark shadow p-3">
          <div class="row text-center">
            <div class="col">
              <h6 class="fw-bold mb-0">Name</h6>
            </div>
            <div class="col">
              <h6 class="fw-bold mb-0 ng-text-red">Price</h6>
            </div>
            <div class="col">
              <h6 class="fw-bold mb-0 ng-text-yellow">Capsule</h6>
            </div>
            <div class="col">
              <h6 class="fw-bold mb-0 ng-text-green">Themes</h6>
            </div>
            <div class="col">
              <h6 class="fw-bold mb-0 ng-text-blue">Encryption</h6>
            </div>
            <div class="col">
              <h6 class="fw-bold mb-0 ng-text-purple">Integration</h6>
            </div>
            <div class="col">
              <h6 class="fw-bold mb-0 ng-text-orange">Features</h6>
            </div>
          </div>
          <?php
          foreach ($products as $product) {
            echo
            '<div class="row mt-3 text-center">
              <h1 class="col h6 fw-bold mb-0">' .
              $product['item_name'] .
              '</h1>
              <h1 class="col h6 fw-bold mb-0">' .
              $product['price'] .
              '</h1>
              <h1 class="col h6 fw-bold mb-0">' .
              $product['capsule'] .
              '</h1>
              <h1 class="col h6 fw-bold mb-0">' .
              $product['themes'] .
              '</h1>
              <h1 class="col h6 fw-bold mb-0">' .
              $product['encryption'] .
              '</h1>
              <h1 class="col h6 fw-bold mb-0">' .
              $product['integration'] .
              '</h1>
              <h1 class="col h6 fw-bold mb-0">' .
              $product['newFeatures'] .
              '</h1>
            </div>';
          }
          ?>
        </div>

      </div>

      <script>
        function call_log_out() {
          var xhttp = new XMLHttpRequest();

          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              window.Location.href = "./account-login.html";
            }
          };

          xhttp.open("GET", "./account-logout.php", true);
          xhttp.send();
        }
      </script>
</body>

</html>
