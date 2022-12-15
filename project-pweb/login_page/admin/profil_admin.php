<?php 
  session_start();
  include ("../../process/connection.php");
  include ("../../process/delete.php");
if ($_SESSION["role"] == "admin"){

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="profil_admin.css">
  </head>
  <body>
    <!--awal navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="nabar">
        <div class="container">
            <div class="container-fluid" id="logo">
                <h1><a class="navbar-brand" href="/tib/tib212410102031/login_page/admin/transaksi/">Laundry-Khan</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/project-pweb/login_page/admin/transaksi/">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/project-pweb/login_page/admin/pesanan/">Pesanan</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-block link-dark text-decoration-none " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="/project-pweb/asset/imgadmin.png" alt="mdo" width="32" height="32"
                            class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="/project-pweb/login_page/admin/profil_admin.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--akhir navbar-->
    <div class="container">
      <div class="card mx-auto" style="margin-top: 100px; width: 600px;">
        <center><img src="/project-pweb/asset/imgadmin.png" class="card-img-top" alt="..." style="width: 150px;">
        <h2 class="card-title">Profil</h2></center>
        <div class="card-body" style="width: 600px;">
          <h4 class="card-text">
            Nama <br> <?php echo $_SESSION['nama']?>
          </h4>
          <h4 class="card-text">
            Email <br> <?php echo $_SESSION['email']?>
          </h4>
          <h4 class="card-text">
            Username <br> <?php echo $_SESSION['uname']?>
          </h4>
          <h4 class="card-text">
            Password <br> ********
          </h4>
          <a href="ubah_admin.php" class="btn float-end">ubah password</a>
          <form action="profil_admin.php" method="post">
              <input type="submit" value="hapus_akun" name='del' class="btn float-end left">
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php } 
else{
  header("location : /project-pweb/login_page/");
}
?>