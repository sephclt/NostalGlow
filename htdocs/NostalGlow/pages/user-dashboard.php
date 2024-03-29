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
  $subscription = $_SESSION['subscription'];
  $sub_id = $_SESSION['sub_id'];
  $user_id = $_SESSION['user_id'];

  if ($subscription == 0) {
    $subscription = "No Subscription";
  }

  $conn = mysqli_connect("localhost", "root", "", "my_online_store");
  $sql_memories = "SELECT `memory_link`, `memory_name` FROM `user_memories` WHERE `user_id` = '$user_id'";
  $rs_memories = mysqli_query($conn, $sql_memories);

  if (!$rs_memories) {
    die('Error: ' . mysqli_error($conn));
  }

  $memories = array();

  // loop through the results
  while ($row = mysqli_fetch_assoc($rs_memories)) {
    $memories[] = $row;
  }

  mysqli_free_result($rs_memories);
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
            <div class="col-6 text-end">
              <button class="ng-btn" onclick="window.location.href='./account-logout.php'">Log out</button>
            </div>
          </div>
          <div class="row text-start mt-3">
            <h5 class="col-6 fw-bold mb-0">Subscription: <span class="fw-bold ng-text-yellow mb-0"><?php echo $subscription ?></span> </h5>
            <?php
            if ($subscription != "No Subscription") {
              echo '<div class="col-6 text-end">
              <button class="ng-btn-red" onclick="window.location.href=`./unsubscribe.php`">Unsubscribe</button>
              </div>';
            }
            ?>
          </div>
        </div>
      </div>

      <?php
      if ($subscription == "No Subscription") {
        echo
        '<div class="col-12">
        <div class="bg-dark shadow p-3">
          <div class="row text-start">
            <h1 class="col h3 fw-bold mb-0">Plans:</h1>
            <div class="col text-center">
              <button class="col fw-bold mb-0 ng-btn" onclick="window.location.href=`subscribe-basic.php`">Basic</button>
            </div>
            <div class="col text-center">
              <button class="col fw-bold mb-0 ng-btn-red" onclick="window.location.href=`subscribe-standard.php`">Standard</button>
            </div>
            <div class="col text-center">
              <button class="col fw-bold mb-0 ng-btn-yellow" onclick="window.location.href=`subscribe-premium.php`">Premium</button>
            </div>
          </div>
          <div class="row text-start">
          </div>
        </div>
      </div>';
      }
      ?>

      <!-- Third Row -->
      <div class="col-12 <?php echo $subscription != "No Subscription" ? 'visible' : 'invisible' ?>">
        <div class="bg-dark shadow p-3">
          <div class="row text-start">
            <h1 class="col-sm-4 h3 fw-bold mb-0">Memories</h1>
          </div>
          <div class="row text-start mt-3">
            <?php
            foreach ($memories as $memory) {
              echo '<div class="col text-center"><a class="ng-btn-yellow text-decoration-none" href="' . $memory['memory_link'] . '" target="_blank">' . $memory['memory_name'] . '</a></div>';
            }
            ?>
          </div>
        </div>
      </div>

      <!-- Fourth Row -->
      <div class="col-12 <?php echo $subscription != "No Subscription" ? 'visible' : 'invisible' ?>">
        <div class="bg-dark shadow p-3">
          <div class="row text-start">
            <h1 class="col-sm-4 h3 fw-bold mb-0">Add Memory</h1>
          </div>
          <div class="row text-start mt-3">
            <form class="d-flex gap-3 needs-validation" action="add-memory.php" method="post">
              <div class="text-start mb-0">
                <label for="email" class="form-label fw-bold">Link</label>
                <input class="form-control bg-transparent text-white rounded-0" type="text" name="add_link" placeholder="Link" required>
              </div>
              <div class="text-start mb-0">
                <label for="email" class="form-label fw-bold">Title</label>
                <input class="form-control bg-transparent text-white rounded-0" type="text" name="add_name" placeholder="Title" required>
              </div>
              <div class="d-flex gap-4">
                <button class="ng-btn w-10 fw-bold" type="submit">+ Add Memory</button>
              </div>
            </form>
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
