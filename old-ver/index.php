<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
      $uname = $password = $firstname = $lastname = $mobile = $address = $uemail = ''; 
      $conn = mysqli_connect('db', 'lamp_user', 'password', 'my_online_store');
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $uname = $_POST["uname"];
        $password = $_POST["password"];
        $uemail = $_POST["uemail"];
      }

      $sql = "INSERT INTO `profile` (`username`, `password`, `email`) VALUES ('$uname', '$password', '$uemail')";

      $rs = mysqli_query($conn, $sql);
    ?>
    <div class="upper-nav" id="upper-nav">
        <div class="home-nav nav-button" id="home-nav">
            <div>
                <span>01</span>
                <span><a href="#home">HOME</a></span>
            </div>
        </div>
        <div class="about-nav nav-button" id="about-nav">
            <div>
                <span>02</span>
                <span><a href="#about-content">ABOUT</a></span>
            </div>
        </div>
        <div class="features-nav nav-button" id="features-nav">
            <div>
                <span>03</span>
                <span><a href="#features-content">FEATURES</a></span>
            </div>
        </div>
    </div>

    <!-- Home Page -->
    <div class="home-content main-content" id="home">
        <div>
            <h1>NOSTAL<span>GLOW</span></h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam, cupiditate?</p>
            <div>
                <button>
                    <a href="#account-content">LOG IN</a>
                </button>
                <button>
                    <a href="#account-content">SIGN UP</a>
                </button>
            </div>
        </div>
        <div>
            <img src="assets/bgless.png" alt="cybernetics" width="50%">
        </div>
    </div>

    <div class="lower-nav">
        <div class="pricing-nav nav-button" id="pricing-nav">
            <div>
                <span>04</span>
                <span><a href="#pricing-content">PRICING</a></span>
            </div>
        </div>
        <div class="resources-nav nav-button" id="resources-nav">
            <div>
                <span>05</span>
                <span><a href="#resources-content">RESOURCES</a></span>
            </div>
        </div>
        <div class="career-nav nav-button" id="career-nav">
            <div>
                <span>06</span>
                <span><a href="#">CAREER</a></span>
            </div>
        </div>
    </div>

    <!-- About Page -->
    <div class="about-content main-content" id="about-content">
        <div>
          <img src="./assets/about-us-image.png" alt="image of a hand" width="50%">
        </div>
        <div>
            <h1>The Company Behind This</h1>
            <p>Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis.</p>
            <p>Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis.</p>
            <div class="stats-section">
              <div class="stat">
                <p>25<span>yrs</span></p>
                <p>Research</p>
              </div>
              <div class="stat">
                <p>98<span>%</span></p>
                <p>Success Rate</p>
              </div>
              <div class="stat">
                <p>4.5<span>/5</span></p>
                <p>Reviews</p>
              </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="features-content main-content" id="features-content">
      <div>
        <p>SECURITY</p>
        <div>
          <img src="./assets/icons/cyber-security_5721221.png" alt="cyber-security_5721221 icon" width="48px">
          <p>End-to-End Encryption</p>
        </div>
        <div>
          <img src="./assets/icons/finger-scanner_5720883.png" alt="finger-scanner_5720883 icon" width="48px">
          <p>User Biometrics</p>
        </div>
        <div>
          <img src="./assets/icons/cctv_5720842.png" alt="cctv_5720842 icon" width="48px">
          <p>24/7 Security Report</p>
        </div>
      </div>
      <div>
        <p>CAPSULE</p>
        <div>
          <img src="./assets/icons/machine-learning_5721042.png" alt="machine-learning_5721042 icon" width="48px">
          <p>Wireless Chip Connection</p>
        </div>
        <div>
          <img src="./assets/icons/virtual-reality_5721177.png" alt="virtual-reality_5721177 icon" width="48px">
          <p>Re-Living Goggles</p>
        </div>
        <div>
          <img src="./assets/icons/blockchain_5720943.png" alt="blockchain_5720943 icon" width="48px">
          <p>Capsule Sharing</p>
        </div>
      </div>
      <div>
        <p>SERVICE</p>
        <div>
          <img src="./assets/icons/drone_5721455.png" alt="drone_5721455 icon" width="48px">
          <p>Drone Delivery</p>
        </div>
        <div>
          <img src="./assets/icons/robot_5721082.png" alt="robot_5721082 icon" width="48px">
          <p>Customer Support</p>
        </div>
        <div>
          <img src="./assets/icons/stop-watch_5721116.png" alt="stop-watch_5721116 icon" width="48px">
          <p>Fast Updates</p>
        </div>
      </div>
    </div>

    <!-- PRICING SECTION -->

    <div class="main-content" id="pricing-content">
      <div class="pricing-sub-section">
        <div class="option">
          <p style="color: #06D6A0">BASIC</p>
          <div class="price">
            <p>P250</p>
            <p>/mo</p>
          </div>
          <div class="details">
            <div class="sub-details">
              <p style="font-weight: 600">1</p>
              <p style="font-weight: 400; color: #5B5B5B;">TIME CAPSULE</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">BASIC</p>
              <p style="font-weight: 400; color: #5B5B5B;">THEMES & CUSTOMIZATION</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">SERVER END</p>
              <p style="font-weight: 400; color: #5B5B5B;">ENCRYPTION</p>
            </div>
          </div>
          <button href="#" value="SELECT" style="color: #06D6A0;">SELECT</button>
        </div>
      </div>
      <div class="pricing-sub-section">
        <div class="option">
          <p style="color: #EF476F">STANDARD</p>
          <div class="price">
            <p>P400</p>
            <p>/mo</p>
          </div>
          <div class="details">
            <div class="sub-details">
              <p style="font-weight: 600">2</p>
              <p style="font-weight: 400; color: #5B5B5B;">TIME CAPSULE</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">ADVANCED</p>
              <p style="font-weight: 400; color: #5B5B5B;">THEMES & CUSTOMIZATION</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">SERVER END</p>
              <p style="font-weight: 400; color: #5B5B5B;">ENCRYPTION</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">BASIC</p>
              <p style="font-weight: 400; color: #5B5B5B;">APP INTEGRATION</p>
            </div>
          </div>
          <button href="#" value="SELECT" style="color: #06D6A0;">SELECT</button>
        </div>
      </div>
      <div class="pricing-sub-section">
        <div class="option">
          <p style="color: #FFD166">PREMIUM</p>
          <div class="price">
            <p>P800</p>
            <p>/mo</p>
          </div>
          <div class="details">
            <div class="sub-details">
              <p style="font-weight: 600">4</p>
              <p style="font-weight: 400; color: #5B5B5B;">TIME CAPSULE</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">EXTENDED</p>
              <p style="font-weight: 400; color: #5B5B5B;">THEMES & CUSTOMIZATION</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">PRIORITY</p>
              <p style="font-weight: 400; color: #5B5B5B;">ACCESS TO NEW FEATURES</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">END-TO-END</p>
              <p style="font-weight: 400; color: #5B5B5B;">ENCRYPTION</p>
            </div>
            <div class="sub-details">
              <p style="font-weight: 600">EXTENDED</p>
              <p style="font-weight: 400; color: #5B5B5B;">APP INTEGRATION</p>
            </div>
          </div>
          <button href="#" value="SELECT" style="color: #06D6A0;">SELECT</button>
        </div>
      </div>
    </div>

    <!-- RESOURCES SECTION -->

    <div class="main-content" id="resources-content">
      <div class="resources-sub-section">
        <p style="color: #FF6B35;">VISIT OUR SOCIALS</p>
        <div class="details">
          <a href="#"><img src="./assets/icons/socials/facebook_2111398.png" alt="facebook image"></a>
          <a href="#"><img src="./assets/icons/socials/github_733553.png" alt="github image"></a>
          <a href="#"><img src="./assets/icons/socials/instagram_2111463.png" alt="instagram image"></a>
        </div>
        <div class="details">
          <a href="#"><img src="./assets/icons/socials/reddit_2111589.png" alt="reddit image"></a>
          <a href="#"><img src="./assets/icons/socials/twitter_889147.png" alt="twitter image"></a>
          <a href="#"><img src="./assets/icons/socials/youtube_2111748.png" alt="youtube image"></a>
        </div>
      </div>
      <div class="resources-sub-section-2">
        <p style="color: #EF476F;">CONTACT US</p>
        <div class="details">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="email" name="email" placeholder="E-Mail">
            <textarea rows="5" cols="10" placeholder="Message"></textarea>
            <button type="submit">SEND</button>
          </form>
        </div>
      </div>
    </div>

    <!-- ACCOUNT SECTION -->
    <div class="main-content" id="account-content">
      <div class="account-sub-section">
        <p>SIGN IN</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="details">
          <input type="text" name="uname" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <input type="email" name="uemail" placeholder="E-Mail">
          <a href="#">Forgot Password?</a>
          <button type="submit">SIGN IN</button>
        </form>
      </div>
      <div class="account-mid-section">
        <p>OR</p>
      </div>
      <div class="account-sub-section">
        <p>SIGN UP</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="details">
          <input type="email" name="uemail" placeholder="E-Mail">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="confirm-password" placeholder="Confirm Password">
          <a href="#">Forgot Password?</a>
          <button type="submit">SIGN UP</button>
        </form>
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
