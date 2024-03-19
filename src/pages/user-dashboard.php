<?php
session_start();
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

  function log_out()
  {
    session_unset();
    session_destroy();
    header("Location: ./account-login.html");
    exit();
  }
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
          <div class="row text-start">
            <h1 class="col-6 h3 fw-bold mb-0"><?php echo $username ?></h1>
            <button class="col-6 btn btn-primary" onclick="call_log_out()">Log out</button>
          </div> <div class="row text-start mt-3"> <h5 class="fw-bold mb-0">Subscription: <span class="fw-bold ng-text-yellow mb-0">Premium</span> </h5>
          </div>
        </div>
      </div>

      <!-- Second Row -->
      <div class="col-12">
        <div class="bg-dark shadow p-3">
          <div class="row text-start">
            <h1 class="col-sm-4 h3 fw-bold mb-0">Memories</h1>
          </div>
          <div class="row text-start">
          </div>
        </div>
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
