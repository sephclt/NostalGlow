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

    <!-- PHP Script -->
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
    
    <div class="container-fluid">

    </div>
  </body>
</html>
