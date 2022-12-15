<?php 
include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Progress Cucian Anda</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<!--awal navbar-->
<nav class="navbar navbar-expand-lg navbar-dark" id="nabar">
  <div class="container">
    <div class="container-fluid" id="logo">
      <h1><a class="navbar-brand" href="/project-pweb/">Laundry-Khan</a></h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="/project-pweb">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Track</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project-pweb/service/">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project-pweb/login_page/">Kepegawaian</a>
          </li>
        </ul>
      </div>
  </div>
</nav>
<!--akhir navbar-->

<!--content-->
    <div class="col-md-12 image">
        <div class="shadow">
            <div class="teks">
                <h1>Track Laundryan Mu Disini</h1>
                <p>Haloo customers Laundry-Khan, pakaianmu aman di Laundry-Khan kok, gak percaya?? cek aja yuk pakaianmu sudah pada tahap apa, gampang banget loh caranya ...
Cara ngeceknya, kamu hanya perlu  memasukan nomor kode uniq yang suda diberikan, kemudian klik search.<br><br>
                Mudah sekali bukan??<br>
                Yuk liat tahap pakaianmu dibawah ini</p>
            </div>
        </div>
    </div>
    <div class="col-md-12 content">
        <div class="search-column pencarian">
            <form action="index.php" method="post">
                <input type="text" name="search" placeholder="inputkan kode unik" >
                <input type="submit" value="cari" name="cari" class="button">
                <p><?php echo $error;?></p>
            </form>
        </div>
        <?php if (isset($data)){?>
                <div class="search-result">
                  <h4>progress anda</h4>
                  <p>Nama : <?php echo $nama?><br>
                     Berat : <?php echo $berat?><br>
                     Status : <?php echo $status?><br>
                     Tipe : <?php echo $tipe?></p>
                </div>
            <?php  }?>
        <img src="/project-pweb/asset/track2.png" alt="">
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>