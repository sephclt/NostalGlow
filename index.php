<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NG-Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>

  <body>
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
          <a href="#pricing-content" class="h3 text-white fw-bold pricing-nav" id="pricing-nav">Pricing</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="ng-text-purple fw-bold">05</h5>
          <a href="#resources-content" class="h3 text-white fw-bold resources-nav" id="resources-nav">Resources</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="ng-text-orange fw-bold">06</h5>
          <a href="#main-content" class="h3 text-white fw-bold career-nav" id="career-nav">Career</a>
        </div>
      </div>

    </div>

    <!--Main Content-->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white" id="main-content">

      <!-- Landing -->
      <div class="row">

        <!-- Text -->
        <div class="col d-flex flex-column justify-content-center align-items-center text-center">
          <h1 class="display-1 fw-bold">NOSTAL<span class="display-1 fw-bold ng-text-green">GLOW</span></h1>
          <p>Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
          <div class="d-flex gap-3">
            <button class="ng-btn" onclick="window.location.href='./pages/account-outside.php'">Log In</button>
            <button class="ng-btn" onclick="window.location.href='./pages/account-outside.php'">Sign up</button>
          </div>
        </div>

      </div>

    </div>

    <!-- About Part -->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center ng-bg-black text-white" id="about-content">

      <!-- Landing -->
      <div class="row px-5">

        <!-- Text -->
        <div class="col d-flex flex-column justify-content-center align-items-start gap-3">
          <h1 class="h1 fw-bold">The Company Behind This</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis semper metus. Vivamus ut justo vel dolor lacinia viverra. Etiam luctus volutpat commodo. Suspendisse varius congue laoreet. Integer tempus, massa et fermentum condimentum, quam nunc maximus metus, nec eleifend dolor neque at dolor. Integer hendrerit fringilla arcu, ac ultrices diam ultrices quis. Sed mattis suscipit diam, vel blandit lorem venenatis eget.</p>
          <p>Vestibulum aliquet faucibus elit vel tristique. In malesuada velit ut arcu auctor, nec tempor metus pulvinar. Duis enim velit, porttitor ut molestie vitae, ultricies non elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id quam consectetur, nec suscipit nulla pharetra. Vestibulum vehicula maximus augue a vestibulum. Fusce quis diam ultricies leo aliquet accumsan porttitor sed ante</p>
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

      <div class="row text-center">
        <h1 class="display-3 fw-bold">FEATURES</h1>
      </div>

      <!-- LANDING -->
      <div class="row px-5 g-2">

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

    <!-- Pricing -->
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center ng-bg-black text-white gap-5" id="pricing-content">

      <div class="row text-center">
        <h1 class="display-3 fw-bold">PRICING</h1>
      </div>

      <!-- Landing -->
      <div class="row container-xxl g-5">

        <!--Basic-->
        <div class="col-md-4">
          <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-5">
            <div>
              <h1 class="fw-bold ng-text-green mb-0">Basic</h1>
            </div>

            <div>
              <h1 class="fw-bold mb-0">P250 <span class="fw-none">/mo</span></h1>
            </div>

            <div class="d-flex flex-column">
              <div class="text-center">
                <p class="h5">1</p>
                <p class="ng-text-gray">TIME CAPSULE</p>
              </div>
              <div class="text-center">
                <p class="h5">BASIC</p>
                <p class="ng-text-gray">THEMES & CUSTOMIZATION</p>
              </div>
              <div class="text-center">
                <p class="h5">SERVER END</p>
                <p class="ng-text-gray">ENCRYPTION</p>
              </div>
            </div>
            <button class="ng-btn">SELECT</button>
          </div>
        </div>

        <!--Basic-->
        <div class="col-md-4">
          <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-5">
            <div>
              <h1 class="fw-bold ng-text-red mb-0">Standard</h1>
            </div>

            <div>
              <h1 class="fw-bold mb-0">P250 <span class="fw-none">/mo</span></h1>
            </div>

            <div class="d-flex flex-column">
              <div class="text-center">
                <p class="h5">2</p>
                <p class="ng-text-gray">TIME CAPSULE</p>
              </div>
              <div class="text-center">
                <p class="h5">ADVANCED</p>
                <p class="ng-text-gray">THEMES & CUSTOMIZATION</p>
              </div>
              <div class="text-center">
                <p class="h5">SERVER END</p>
                <p class="ng-text-gray">ENCRYPTION</p>
              </div>
              <div class="text-center">
                <p class="h5">BASIC</p>
                <p class="ng-text-gray">APP INTEGRATION</p>
              </div>
            </div>
            <button class="ng-btn-red">SELECT</button>
          </div>
        </div>

        <!--Basic-->
        <div class="col-md-4">
          <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-5">
            <div>
              <h1 class="fw-bold ng-text-yellow mb-0">Premium</h1>
            </div>

            <div>
              <h1 class="fw-bold mb-0">P800 <span class="fw-none">/mo</span></h1>
            </div>

            <div class="d-flex flex-column">
              <div class="text-center">
                <p class="h5">4</p>
                <p class="ng-text-gray">TIME CAPSULE</p>
              </div>
              <div class="text-center">
                <p class="h5">EXTENDED</p>
                <p class="ng-text-gray">THEMES & CUSTOMIZATION</p>
              </div>
              <div class="text-center">
                <p class="h5">END-TO-END</p>
                <p class="ng-text-gray">ENCRYPTION</p>
              </div>
              <div class="text-center">
                <p class="h5">EXTENDED</p>
                <p class="ng-text-gray">APP INTEGRATION</p>
              </div>
              <div class="text-center">
                <p class="h5">PRIORITY</p>
                <p class="ng-text-gray">ACCESS TO NEW FEATURES</p>
              </div>
            </div>
            <button class="ng-btn-yellow">SELECT</button>
          </div>
        </div>

      </div>

    </div>

    <!-- Resources -->
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center align-items-center ng-bg-black text-white" id="resources-content">

      <div class="row container-xxl gap-5">
        
        <!-- Visit Our Socials -->
        <div class="col px-5 gap-3 d-flex flex-column justify-content-center align-items-center">
          <div class="row gap-3">
            <h1 class="col fw-bold">VISIT OUR SOCIALS</h1>
          </div>
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
