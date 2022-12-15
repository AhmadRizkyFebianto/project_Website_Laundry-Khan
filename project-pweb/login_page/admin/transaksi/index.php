<?php
include("process.php");
if (isset($_SESSION['uname']) && isset($_SESSION['passw']) && $_SESSION["role"] == "admin"){

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lakukan Transaksi</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body onLoad="initClock()">
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
        <ul class="navbar-nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="#">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project-pweb/login_page/admin/pesanan/">Pesanan</a>
          </li>
        </ul>
        <div class="dropdown">
          <a href="#" class="d-block link-dark text-decoration-none " data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/project-pweb/asset/imgadmin.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="/project-pweb/login_page/admin/profil_admin.php">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->

  <!--content-->
  <div class="shadow">
    <div id="timedate">
             <a id="mon">January</a>
             <a id="d">1</a>,
             <a id="y">0</a><br />
             <a id="h">12</a> :
             <a id="m">00</a>:
             <a id="s">00</a>:
             <a id="mi">000</a>
    </div>
      
    <h1>Laundry-Khan</h1>
    <p>Untuk Menambahkan Data Cucian Customers Lengkapi Form Dibawah Ini</p>
    <div class="inputan">
      <form action="index.php" name="form1" method="post">
        <input type="text" name="berat" placeholder="Berat Cucian (kg)" id="berat">
        <input type="text" name="nama" placeholder="Nama Customer">
        <input type="text" name="tipe" placeholder="Tipe Cucian" id="tipe" list="tipecucian">
        <datalist id="tipecucian">
          <option value="cucian basah"></option>
          <option value="cucian kering"></option>
        </datalist>
        <input type="submit" value="Submit" name="transaksi" class="submit">
        <p><?Php echo $error ?></p>
      </form>
      <?php if($error = "Berhasil Menambahkan") {?>
        <div class="form-berhasil">
            <h3>Informasi Transaksi</h3>
            <p>Nama : <?php echo $nama?><br>
               Berat : <?php echo $berat?><br>
               Tipe : <?php echo $tipe?><br>
               Harga : <?php echo $harga?><br>
               Kode unik : <?php echo $code ?></p>
        </div>
      <?php } ?>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <script src="script.js"></script>

</body>

</html>

<?php
}else{
  header("location: /project-pweb/login_page/");
}
?>