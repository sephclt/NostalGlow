<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

  <body>

    <div class="container-fluid position-fixed top-0">

      <!--Top Navbar-->
      <div class="row bg-black ng-border-bottom">
        <div class="col px-5 py-3">
          <h5 class="text-red fw-bold">01</h5>
          <a href="../index.php#main-content" class="h3 text-white fw-bold home-nav" id="home-nav">Home</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-yellow fw-bold">02</h5>
          <a href="../index.php#about-content" class="h3 text-white fw-bold about-nav" id="about-nav">About</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-green fw-bold">03</h5>
          <a href="../index.php#features-content" class="h3 text-white fw-bold features-nav" id="features-nav">Features</a>
        </div>
      </div>

    </div>

    <div class="container-fluid position-fixed bottom-0">

      <!-- Bottom Navbar -->
      <div class="row bg-black ng-border-top">
        <div class="col px-5 py-3">
          <h5 class="text-blue fw-bold">04</h5>
          <a href="../index.php#main-content" class="h3 text-white fw-bold pricing-nav" id="pricing-nav">Pricing</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-purple fw-bold">05</h5>
          <a href="../index.php#resources-content" class="h3 text-white fw-bold resources-nav" id="resources-nav">Resources</a>
        </div>
        <div class="col px-5 py-3">
          <h5 class="text-orange fw-bold">06</h5>
          <a href="../index.php#main-content" class="h3 text-white fw-bold career-nav" id="career-nav">Career</a>
        </div>
      </div>

    </div>

    <!--Main Content-->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-black text-white" id="main-content">

      <!-- Landing -->
      <div class="row container-xl">

        <!-- @Log In -->
        <div class="col d-flex flex-column align-items-center gap-5">
          <h1 class="fw-bold">SIGN IN</h1>
          <form method="post" action="./account-success.php" class="form-details">
            <div class="w-100">
              <input class="form-control rounded-0 bg-transparent text-white" id="username" type="text" name="uname" placeholder="Username" required>
              <div class="invalid-feedback">
                Please enter a username.
              </div>
            </div>
            <div class="w-100">
            <input class="form-control rounded-0 bg-transparent text-white" id="password" type="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback">
                Please enter password.
              </div>
            </div>
            <a class="form-details-a text-red w-100 text-center" href="#">Forgot Password?</a>
            <button class="ng-btn w-100" type="submit">SIGN IN</button>
          </form>
        </div>

        <?php
          if (isset($_POST['uname']) && isset($_POST['password'])) {
            $uname = $_POST['uname'];
            $password = $_POST['password'];

            if ($password == $confirm_password) {
              echo "<script>alert('Account created successfully!')</script>";
            } else {
              echo "<script>alert('Passwords do not match!')</script>";
            }
          }
        ?>

        <div class="col d-flex justify-content-center align-items-center">
          <h1 class="fw-bold">OR</h1>
        </div>

        <!-- @Sign Up -->
        <div class="col d-flex flex-column align-items-center gap-5">
          <h1 class="fw-bold">SIGN UP</h1>
          <form method="post" action="./account-success.php" class="form-details needs-validation" novalidate>
            <div class="w-100">
              <input class="form-control rounded-0 bg-transparent text-white" id="username" type="text" name="uname" placeholder="Username" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
            <div class="w-100">
            <input class="form-control rounded-0 bg-transparent text-white" id="email" type="email" name="uemail" placeholder="E-Mail" required>
              <div class="invalid-feedback">
                Please choose a valid E-Mail.
              </div>
            </div>
            <div class="w-100">
            <input class="form-control rounded-0 bg-transparent text-white" id="password" type="password" name="password" placeholder="Password" required>
              <div class="invalid-feedback">
                Please choose a password.
              </div>
            </div>
            <div class="w-100">
            <input class="form-control rounded-0 bg-transparent text-white" id="confirm-password" type="password" name="confirm-password" placeholder="Confirm Password" required>
              <div class="invalid-feedback">
                Please confirm your password.
              </div>
            </div>
            <button class="ng-btn w-100" type="submit">SIGN UP</button>
          </form>
        </div>

      </div>

    </div>

    <script>
      const forms = document.querySelectorAll('.needs-validation')

      const username = document.getElementById('username')
      const email = document.getElementById('email')
      const password = document.getElementById('password')
      const confirm_password = document.getElementById('confirm-password')

      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    </script>

  </body>

</html>
