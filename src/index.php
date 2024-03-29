<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>NostalGlow</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  $username = $_SESSION['username'];

  $isloggedin = false;

  if ($username != "") {
    $isloggedin = true;
  }

  ?>
  <div class="container-fluid position-fixed top-0">

    <!--Top Navbar-->
    <div class="row ng-bg-black ng-border-bottom">
      <div class="col px-5 py-3">
        <h5 class="ng-text-red fw-bold">01</h5>
        <a href="#main-content" class="h3 text-white fw-bold home-nav" id="home-nav">Home</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-yellow fw-bold">02</h5>
        <a href="#about-content" class="h3 text-white fw-bold about-nav" id="about-nav">About</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-green fw-bold">03</h5>
        <a href="#features-content" class="h3 text-white fw-bold features-nav" id="features-nav">Features</a>
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
        <a href="#resources-content" class="h3 text-white fw-bold resources-nav" id="resources-nav">Resources</a>
      </div>
      <div class="col px-5 py-3">
        <h5 class="ng-text-orange fw-bold">06</h5>
        <a href="#career-content" class="h3 text-white fw-bold career-nav" id="career-nav">Career</a>
      </div>
    </div>

  </div>

  <!--Main Content-->
  <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white" id="main-content">

    <!-- Landing -->
    <div class="row">

      <!-- Text -->
      <div class="col d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="display-1 fw-bold">NOSTAL<span class="display-1 fw-bold ng-text-green">GLOW</span></h1>
        <p>Store your memories digitally in a safe and secure capsule to keep for generations</p>
        <div class="d-flex gap-3 <?php echo $isloggedin ? 'invisible' : 'visible' ?>">
          <button class="ng-btn fw-bold" onclick="window.location.href='./pages/account-login.html'">Log In</button>
          <button class="ng-btn fw-bold" onclick="window.location.href='./pages/account-signup.html'">Sign up</button>
        </div>
        <div class="d-flex gap-3 <?php echo $isloggedin ? 'visible' : 'invisible' ?>">
          <button class="ng-btn fw-bold" onclick="window.location.href='./pages/user-dashboard.php'">Dashboard</button>
        </div>
      </div>

    </div>

  </div>

  <!-- ABOUT -->
  <div class="container-fluid vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white" id="about-content">

    <!-- Landing -->
    <div class="row container-xl px-5">

      <!-- Text -->
      <div class="col d-flex flex-column justify-content-center align-items-start gap-3">
        <h1 class="h1 fw-bold">The Company Behind This</h1>
        <p>The NostalGlow Company are pioneers of a groundbreaking solution in the realm of memory preservation. Our company specializes in capturing and storing people's most cherished memories in a compact, secure, and durable device known as the GlowCapsules. We provide a way for individuals to relive their most precious moments in a clear way.</p>
        <p>Our mission is to empower individuals to preserve their most precious memories, enriching lives and fostering meaningful connections across generations. We believe that memories defines who we are, and our innovative solutions aim to celebrate this treasures of ours.</p>
        <div class="d-flex gap-5">
          <div>
            <h3 class="ng-text-red">25<span class="text-white">yrs</span></h3>
            <p>Research</p>
          </div>
          <div>
            <h3 class="ng-text-yellow">98<span class="text-white">%</span></h3>
            <p>Success Rate</p>
          </div>
          <div>
            <h3 class="ng-text-green">4.5<span class="text-white">/5</span></h3>
            <p>Reviews</p>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- FEATURES -->
  <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center ng-bg-black text-white gap-5" id="features-content">

    <div class="row container-xl px-5 text-center text-md-start">
      <h1 class="display-3 fw-bold">FEATURES</h1>
    </div>

    <!-- LANDING -->
    <div class="row container-xl px-5 g-2">

      <!-- Text -->
      <div class="col-md-12">
        <div class="bg-dark shadow p-3 ng-text-blue">
          <h1 class="fw-bold mb-0">SECURITY</h1>
          <div class="row py-3 text-white">
            <h5 class="mb-0 col-md-3"><span class="ng-text-blue fw-bold">01. </span>End-to-end Encryption</h5>
            <h5 class="mb-0 col-md-3"><span class="ng-text-blue fw-bold">02. </span>User Biometrics</h5>
            <h5 class="mb-0 col-md-3"><span class="ng-text-blue fw-bold">03. </span>Security Reports</h5>
            <h5 class="mb-0 col-md-3"><span class="ng-text-blue fw-bold">04. </span>Fast Updates</h5>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="bg-dark shadow p-3 ng-text-purple">
          <h1 class="fw-bold mb-0">CAPSULE</h1>
          <div class="row py-3 text-white">
            <h5 class="mb-0 col-md-4"><span class="ng-text-purple fw-bold">01. </span>Wireless Chip Connection</h5>
            <h5 class="mb-0 col-md-4"><span class="ng-text-purple fw-bold">02. </span>Re-Living Goggles</h5>
            <h5 class="mb-0 col-md-4"><span class="ng-text-purple fw-bold">03. </span>Capsule Sharing</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bg-dark shadow p-3 ng-text-orange">
          <h1 class="fw-bold mb-0">SERVICE</h1>
          <div class="row py-3 text-white">
            <h5 class="mb-0 col-md-6"><span class="ng-text-orange fw-bold">01. </span>Drone Delivery</h5>
            <h5 class="mb-0 col-md-6"><span class="ng-text-orange fw-bold">02. </span>Customer Support</h5>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- RESOURCES -->
  <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center ng-bg-black text-white" id="resources-content">

    <div class="row container-xl">

      <!-- Contact Us -->
      <div class="col px-5 d-flex flex-column">
        <div class="bg-dark p-5 shadow p-3">
          <h1 class="fw-bold">Contact Us</h1>
          <form class="d-flex flex-column gap-3 needs-validation" method="post" action="./pages/send-message.php" novalidate>
            <div class="text-start mb-0">
              <label for="email" class="form-label fw-bold">Email</label>
              <input class="form-control bg-transparent text-white rounded-0 w-50" type="email" name="sender_email" placeholder="Email" required>
            </div>
            <div class="text-start mb-0">
              <label for="message" class="form-label fw-bold">Message</label>
              <textarea class="form-control bg-transparent text-white rounded-0 w-100" rows="8" cols="10" name="sender_message" placeholder="Message" required></textarea>
            </div>
            <div class="d-flex gap-4">
              <button class="ng-btn w-25 fw-bold" type="submit">Submit</button>
              <div class="py-2 d-flex justify-content-center">
                <a href="#"><img src="./assets/icons/socials/github_733553.png" alt="github" width="32px" height="32px"></a>
              </div>
              <div class="py-2 d-flex justify-content-center">
                <a href="#"><img src="./assets/icons/socials/reddit_2111589.png" alt="reddit" width="32px" height="32px"></a>
              </div>
              <div class="py-2 d-flex justify-content-center">
                <a href="#"><img src="./assets/icons/socials/twitter_889147.png" alt="twitter" width="32px" height="32px"></a>
              </div>
              <div class="py-2 d-flex justify-content-center">
                <a href="#"><img src="./assets/icons/socials/youtube_2111748.png" alt="youtube" width="32px" height="32px"></a>
              </div>
              <div class="py-2 d-flex justify-content-center">
                <a href="#"><img src="./assets/icons/socials/facebook_2111398.png" alt="facebook" width="32px" height="32px"></a>
              </div>
              <div class="py-2 d-flex justify-content-center">
                <a href="#"><img src="./assets/icons/socials/instagram_2111463.png" alt="instagram" width="32px" height="32px"></a>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>

  <!-- CAREER -->
  <div class="container-fluid vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white" id="career-content">

    <!-- Landing -->
    <div class="row container-xl px-5">

      <!-- Text -->
      <div class="col d-flex flex-column justify-content-center align-items-start gap-3">
        <h1 class="h1 fw-bold">We are hiring</h1>
        <p>The NostalGlow Company continues to innovate and we are on a mission to push the boundaries of neuortechnology and memory preservation. We are seeking passionate and like minded individuals who are eager to make a meaningful impact on the world.</p>
        <p>Explore our current opportunities and join us on a mission to unlock the power of technology. Together we will shape the future of memory preservation and create a legacy that lasts a lifetime.</p>
        <p>Send us your resume: <span class="fw-bold ng-text-green">real.company@fmail.com</span></p>
      </div>

    </div>

  </div>

  <script>
    document.getElementById('home-nav').classList.add('clicked');

    let nav_buttons = ['home-nav', 'about-nav', 'features-nav', 'pricing-nav', 'resources-nav', 'career-nav'];
    let prevButton = document.getElementById('home-nav');

    for (let i = 0; i < nav_buttons.length; i++) {
      document.getElementById(nav_buttons[i]).addEventListener('click', function() {
        if (prevButton) {
          prevButton.classList.remove('clicked');
        }

        this.classList.add('clicked');

        prevButton = this;
      });
    }

    const forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    });
  </script>
</body>

</html>
