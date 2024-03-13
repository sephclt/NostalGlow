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
  <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center ng-bg-black text-white gap-3" id="pricing-content">

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
          <button class="ng-btn fw-bold">SELECT</button>
        </div>
      </div>

      <!--Basic-->
      <div class="col-md-4">
        <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-3">
          <div>
            <h1 class="fw-bold ng-text-red mb-0 h2">Standard</h1>
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
          <button class="ng-btn-red fw-bold">SELECT</button>
        </div>
      </div>

      <!--Basic-->
      <div class="col-md-4">
        <div class="py-3 bg-dark shadow d-flex flex-column justify-content-start align-items-center gap-3">
          <div>
            <h1 class="fw-bold ng-text-yellow mb-0 h2">Premium</h1>
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
          <button class="ng-btn-yellow fw-bold">SELECT</button>
        </div>
      </div>

    </div>

  </div>
</body>

</html>
