<?php
include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
        <h2>Registration</h2>
        <form action="index.php" method="post">
            <div class="user-box">
              <input type="text" name="nama" required="">
              <label>Nama</label>
            </div>
            <div class="user-box">
              <input type="text" name="email" required="">
              <label>Email</label>
            </div>
            <div class="user-box">
              <input type="text" name="Username" required="">
              <label>Username</label>
            </div>
            <div class="user-box">
              <input type="password" name="Password" required="" id="myInput">
              <label>Password</label>
            </div>
          <div class="user-box">
              <input type="password" name="Confirm-pass" required="">
              <label>Confirm Password</label>
          </div>
          <div class="user-box">
            <label><?php echo $error;?></label>
          </div>
            <div id="submit">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" value="daftar" name="submit" class="submit">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
            function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }</script>
</body>
</html>