<?php
include("../process/sign_in.php");
if (!isset($_SESSION['uname']) && !isset($_SESSION['passw'])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="index.php" method="post">
          <div class="user-box">
            <input type="text" name="uname" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="passw" required="">
            <label>Password</label>
          </div>
          <div id="sign-up">
            <u><a href="../sign_up">Sign up</a></u>
            <u><a href="pemulihan.php">Lupa password?</a></u>
          </div>
          <i><p style="color: #FFFFFF;"><?php echo $error; ?></p></i>
          <div id="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Login" name="submit">
          </div>
        </form>
    </div>
</body>
</html>

<?php
}
else{
  if ($_SESSION["role"] == "admin"){
    header("location: /project-pweb/login_page/admin/transaksi/");
  }
  else{
    header("location: /project-pweb/login_page/Pegawai/");
  }
}
?>