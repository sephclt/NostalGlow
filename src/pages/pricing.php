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
  <?php
  $basic = array();
  $standard = array();
  $premium = array();
  $conn = mysqli_connect('db', 'root', '', 'my_online_store');

  $sql_basic = "SELECT price, capsule, themes, encryption, integration, newFeatures FROM `products` WHERE `item_name` = 'Basic'";
  $sql_standard = "SELECT price, capsule, themes, encryption, integration, newFeatures FROM `products` WHERE `item_name` = 'Standard'";
  $sql_premium = "SELECT price, capsule, themes, encryption, integration, newFeatures FROM `products` WHERE `item_name` = 'Premium'";

  $rs_basic = mysqli_query($conn, $sql_basic);
  $rs_standard = mysqli_query($conn, $sql_standard);
  $rs_premium = mysqli_query($conn, $sql_premium);

  if (!$rs_basic || !$rs_standard || !$rs_premium) {
    die('Error: ' . mysqli_error($conn));
  }

  $row_basic = mysqli_fetch_row($rs_basic);
  $row_standard = mysqli_fetch_row($rs_standard);
  $row_premium = mysqli_fetch_row($rs_premium);

  $basic['price'] = $row_basic[0];
  $basic['timeCapsule'] = $row_basic[1];
  $basic['themes'] = $row_basic[2];
  $basic['encryption'] = $row_basic[3];
  $basic['integration'] = $row_basic[4];
  $basic['newFeatures'] = $row_basic[5];

  $standard['price'] = $row_standard[0];
  $standard['timeCapsule'] = $row_standard[1];
  $standard['themes'] = $row_standard[2];
  $standard['encryption'] = $row_standard[3];
  $standard['integration'] = $row_standard[4];
  $standard['newFeatures'] = $row_standard[5];

  $premium['price'] = $row_premium[0];
  $premium['timeCapsule'] = $row_premium[1];
  $premium['themes'] = $row_premium[2];
  $premium['encryption'] = $row_premium[3];
  $premium['integration'] = $row_premium[4];
  $premium['newFeatures'] = $row_premium[5];
  ?>
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
        <a href="../index.html#main-content" class="h3 text-white fw-bold pricing-nav clicked" id="pricing-nav">Pricing</a>
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

  <!-- PRICING -->
  <div class="container-fluid min-vh-100 py-5 d-flex flex-column justify-content-center align-items-center ng-bg-black text-white gap-3" id="pricing-content">

    <div class="row text-center">
      <h1 class="display-5 fw-bold">PRICING</h1>
    </div>

    <!-- Landing -->
    <div class="row container-xxl g-5">

      <!--Basic-->
      <div class="col-md-4">
        <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-3">
          <div>
            <h1 class="fw-bold ng-text-green mb-0 h2">Basic</h1>
          </div>

          <div>
            <h1 class="fw-bold mb-0">P<?php echo $basic['price'] ?> <span class="fw-none">/mo</span></h1>
          </div>

          <div class="d-flex flex-column">
            <div class="text-center">
              <p class="h5"><?php echo $basic['timeCapsule'] ?></p>
              <p class="ng-text-gray">TIME CAPSULE</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $basic['themes'] ?></p>
              <p class="ng-text-gray">THEMES & CUSTOMIZATION</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $basic['encryption'] ?></p>
              <p class="ng-text-gray">ENCRYPTION</p>
            </div>
          </div>
          <button class="ng-btn fw-bold">SELECT</button>
        </div>
      </div>

      <!-- Standard -->
      <div class="col-md-4">
        <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-3">
          <div>
            <h1 class="fw-bold ng-text-red mb-0 h2">Standard</h1>
          </div>

          <div>
            <h1 class="fw-bold mb-0">P<?php echo $standard['price'] ?> <span class="fw-none">/mo</span></h1>
          </div>

          <div class="d-flex flex-column">
            <div class="text-center">
              <p class="h5"><?php echo $standard['timeCapsule'] ?></p>
              <p class="ng-text-gray">TIME CAPSULE</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $standard['themes'] ?></p>
              <p class="ng-text-gray">THEMES & CUSTOMIZATION</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $standard['encryption'] ?></p>
              <p class="ng-text-gray">ENCRYPTION</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $standard['integration'] ?></p>
              <p class="ng-text-gray">APP INTEGRATION</p>
            </div>
          </div>
          <button class="ng-btn-red fw-bold">SELECT</button>
        </div>
      </div>

      <!-- Premium -->
      <div class="col-md-4 mb-5">
        <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-3">
          <div>
            <h1 class="fw-bold ng-text-yellow mb-0 h2">Premium</h1>
          </div>

          <div>
            <h1 class="fw-bold mb-0">P<?php echo $premium['price'] ?> <span class="fw-none">/mo</span></h1>
          </div>

          <div class="d-flex flex-column">
            <div class="text-center">
              <p class="h5"><?php echo $premium['timeCapsule'] ?></p>
              <p class="ng-text-gray">TIME CAPSULE</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $premium['themes'] ?></p>
              <p class="ng-text-gray">THEMES & CUSTOMIZATION</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $premium['encryption'] ?></p>
              <p class="ng-text-gray">ENCRYPTION</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $premium['integration'] ?></p>
              <p class="ng-text-gray">APP INTEGRATION</p>
            </div>
            <div class="text-center">
              <p class="h5 text-uppercase"><?php echo $premium['newFeatures'] ?></p>
              <p class="ng-text-gray">ACCESS TO NEW FEATURES</p>
            </div>
          </div>
          <button class="ng-btn-yellow fw-bold">SELECT</button>
        </div>
      </div>

    </div>

  </div>
</body>

</html>
