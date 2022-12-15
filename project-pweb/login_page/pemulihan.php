<?php
    include("reedit.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="pemulihan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="login-box">
        <h2>Pemulihan Akun</h2>
        <i><p style="color: #FFFFFF;">*masukan email anda</p></i>
        <form action="pemulihan.php" method="post">
          <div class="user-box">
            <input type="text" name="email" required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="text" name="password" required="">
            <label>Password Baru</label>
          </div>
          <div class="user-box">
            <input type="text" name="confirm-password" required="">
            <label>Confirm Password</label>
          </div>
          <a href="#" id="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="SUBMIT" name="submit" id="submit">
          </a>
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