<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NG-Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="container-fluid position-fixed top-0">

      <!--Top Navbar-->
      <div class="row bg-black ng-border-bottom">
        <div class="col px-5 py-3">
          <h5 class="text-red fw-bold">01</h5>
          <a href="#main-content" class="h3 text-white fw-bold home-nav" id="home-nav">Home</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-yellow fw-bold">02</h5>
          <a href="#about-content" class="h3 text-white fw-bold about-nav" id="about-nav">About</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-green fw-bold">03</h5>
          <a href="#features-content" class="h3 text-white fw-bold features-nav" id="features-nav">Features</a>
        </div>
      </div>

    </div>

    <div class="container-fluid position-fixed bottom-0">

      <!-- Bottom Navbar -->
      <div class="row bg-black ng-border-top">
        <div class="col px-5 py-3">
          <h5 class="text-blue fw-bold">04</h5>
          <a href="#main-content" class="h3 text-white fw-bold pricing-nav" id="pricing-nav">Pricing</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-purple fw-bold">05</h5>
          <a href="#resources-content" class="h3 text-white fw-bold resources-nav" id="resources-nav">Resources</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-orange fw-bold">06</h5>
          <a href="#main-content" class="h3 text-white fw-bold career-nav" id="career-nav">Career</a>
        </div>
      </div>

    </div>

    <!--Main Content-->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-black text-white" id="main-content">

      <!-- Landing -->
      <div class="row">

        <!-- Text -->
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <h1 class="display-1 fw-bold">NOSTAL<span class="display-1 fw-bold text-green">GLOW</span></h1>
          <p>Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
          <div class="d-flex gap-3">
            <button class="ng-btn">Log In</button>
            <button class="ng-btn">Sign up</button>
          </div>
        </div>

      </div>

    </div>

    <!-- About Part -->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-black text-white" id="about-content">

      <!-- Landing -->
      <div class="row px-5">

        <!-- Text -->
        <div class="col d-flex flex-column justify-content-center align-items-start gap-3">
          <h1 class="h1 fw-bold">The Company Behind This</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis semper metus. Vivamus ut justo vel dolor lacinia viverra. Etiam luctus volutpat commodo. Suspendisse varius congue laoreet. Integer tempus, massa et fermentum condimentum, quam nunc maximus metus, nec eleifend dolor neque at dolor. Integer hendrerit fringilla arcu, ac ultrices diam ultrices quis. Sed mattis suscipit diam, vel blandit lorem venenatis eget.</p>
          <p>Vestibulum aliquet faucibus elit vel tristique. In malesuada velit ut arcu auctor, nec tempor metus pulvinar. Duis enim velit, porttitor ut molestie vitae, ultricies non elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id quam consectetur, nec suscipit nulla pharetra. Vestibulum vehicula maximus augue a vestibulum. Fusce quis diam ultricies leo aliquet accumsan porttitor sed ante</p>
          <div class="d-flex gap-5">
            <div>
              <h3 class="text-red">25<span class="text-white">yrs</span></h3>
              <p>Research</p>
            </div>
            <div>
              <h3 class="text-yellow">98<span class="text-white">%</span></h3>
              <p>Success Rate</p>
            </div>
            <div>
              <h3 class="text-green">4.5<span class="text-white">/5</span></h3>
              <p>Reviews</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- Features -->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-black text-white" id="features-content">

      <!-- Landing -->
      <div class="row w-100 px-5">

        <!-- Text -->
        <div class="col d-flex flex-column gap-3">
          <h2 class="fw-bold">SECURITY</h2>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/cyber-security_5721221.png" alt="cybersecurity" width="32px">
            <p class="mb-0 h5">End-to-end Encryption</p>
          </div>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/finger-scanner_5720883.png" alt="finger scanner" width="32px">
            <p class="mb-0 h5">User Biometrics</p>
          </div>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/cctv_5720842.png" alt="cctv" width="32px">
            <p class="mb-0 h5">24/7 Security Reports</p>
          </div>
        </div>

        <div class="col d-flex flex-column gap-3">
          <h2 class="fw-bold">CAPSULE</h2>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/machine-learning_5721042.png" alt="machine learning" width="32px">
            <p class="mb-0 h5">Wireless Chip Connection</p>
          </div>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/virtual-reality_5721177.png" alt="virtual reality" width="32px">
            <p class="mb-0 h5">Re-Living Goggles</p>
          </div>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/blockchain_5720943.png" alt="blockchain" width="32px">
            <p class="mb-0 h5">Capsule Sharing</p>
          </div>
        </div>

        <div class="col d-flex flex-column gap-3">
          <h2 class="fw-bold">SERVICE</h2>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/drone_5721455.png" alt="drone delivery" width="32px">
            <p class="mb-0 h5">Drone Delivery</p>
          </div>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/robot_5721082.png" alt="robot" width="32px">
            <p class="mb-0 h5">Customer Supprt</p>
          </div>
          <div class="d-flex align-items-center gap-3">
            <img src="./assets/icons/stop-watch_5721116.png" alt="stop watch" width="32px">
            <p class="mb-0 h5">Fast Updates</p>
          </div>
        </div>

      </div>

    </div>

    <!-- Pricing -->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-black text-white" id="pricing-content">

      <!-- Landing -->
      <div class="row w-100 px-5">
        <div class="col d-flex flex-column justify-content-center align-items-center gap-5">
          <h2 class="fw-bold text-green">BASIC</h2>
          <h1 class="fw-bold">P250<span class="fw-regular">/mo</span></h1>
          <div>
            
          </div>
        </div>
      </div>

    </div>

    <!-- Resources -->
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center bg-black text-white" id="resources-content">

      <div class="row container-xl justify-content-center align-items-center gap-5">
        
        <!-- Visit Our Socials -->
        <div class="col px-5 d-flex flex-column gap-3">
          <h1 class="fw-bold">VISIT OUR SOCIALS</h1>
          <div class="d-flex gap-5">
            <img src="./assets/icons/socials/github_733553.png" alt="github" width="64px" height="64px">
            <img src="./assets/icons/socials/reddit_2111589.png" alt="reddit" width="64px" height="64px">
            <img src="./assets/icons/socials/twitter_889147.png" alt="twitter" width="64px" height="64px">
            <img src="./assets/icons/socials/youtube_2111748.png" alt="youtube" width="64px" height="64px">
            <img src="./assets/icons/socials/facebook_2111398.png" alt="facebook" width="64px" height="64px">
            <img src="./assets/icons/socials/instagram_2111463.png" alt="instagram" width="64px" height="64px">
          </div>
        </div>

        <!-- Contact Us -->
        <div class="col px-5 d-flex flex-column">
          <h1 class="fw-bold">Contact Us</h1>
          <form class="d-flex flex-column gap-3" method="post" action="">
            <input class="form-email" type="email" name="email" placeholder="Email">
            <textarea class="form-message w-100" rows="8" cols="10" placeholder="Message"></textarea>
            <button class="ng-btn w-25" type="submit">Submit</button>
          </form>
        </div>

      </div>

    </div>

    <script>
        document.getElementById('home-nav').classList.add('clicked');

        let nav_buttons = ['home-nav', 'about-nav', 'features-nav', 'pricing-nav', 'resources-nav', 'career-nav'];
        let prevButton = document.getElementById('home-nav');

        for (let i = 0; i < nav_buttons.length; i++) {
            document.getElementById(nav_buttons[i]).addEventListener('click', function () {
                if (prevButton) {
                    prevButton.classList.remove('clicked');
                }

                this.classList.add('clicked');

                prevButton = this;
            });
        }
    </script>
  </body>
</html>
