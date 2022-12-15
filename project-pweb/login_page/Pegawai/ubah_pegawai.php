<?php
session_start();
include ("../../process/edit1.php");
if ($_SESSION["role"] == "pegawai"){

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganti Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="ubah_pegawai.css">
  </head>
  <body>
   <!--awal navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark" id="nabar">
        <div class="container">
            <div class="container-fluid" id="logo">
                <h1><a class="navbar-brand" href="#">Laundry-Khan</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/project-pweb/login_page/Pegawai">Pesanan</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-block link-dark text-decoration-none " data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="/project-pweb/asset/imgpegawai.png" alt="mdo" width="32" height="32"
                            class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="profil_pegawai.php">Profile</a></li>
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
        <center><img src="/project-pweb/asset/imgpegawai.png" class="card-img-top" alt="..." style="width: 150px;">
          <h2 class="card-title">Ubah Password</h2>
          <h5 class="card-title">*lengkapi data diri berikut untuk merubah password</h5></center>
        <div class="card-body" style="width: 600px; height: 260px;">
        <form action="ubah_pegawai.php" method="post">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label ">Password</label>
              <input type="password" class="form-control"  name="password"  id="exampleInputPassword1" placeholder="password sebelumnya">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" placeholder="password sebelumnya">Confirm Password</label>
              <input type="password" class="form-control"name="new-password" id="exampleInputPassword1" placeholder="password baru">
            </div>

            <button type="submit" class="btn float-end" name="submit">Ubah</button>
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