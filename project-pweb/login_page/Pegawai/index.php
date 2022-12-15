<?php  
 include("../../process/connection.php");
 $query = mysqli_query($conn,"select * from trx where status = 'on progress' or status = 'belum dikerjakan'");
 $row = 1;
 $rows =[];
 while($dat = mysqli_fetch_assoc($query)){
    $rows[] = $dat;
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Pesanan</title>
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
                        <a class="nav-link active" href="#" style="margin-right: 10px;">Pesanan</a>
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

    <div class="container-fluid">
            <div class="shadow row overflow-auto">
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
                <p>Update selalu dalam pengerjaan dengan mengklik tombol pada kolom aksi sesuai tahapan yang dilakukan</p>

                <div id="contain">
                    <table class="table table-striped table-hover table-sm" style="background-color: #FFFFFF;">
                        <thead id="header">
                            <tr id="row">
                            <th scope="col">No</th>
                            <th scope="col">Kode Unik</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Berat Cucian</th>
                            <th scope="col">Tipe Cucian</th>
                            <th scope="col">Proses</th>
                            <th scope="col">Dikerjakan Oleh</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($rows as $data) :?>
                            <tr>
                            <th scope="row"><?php echo $row ;?></th>
                            <td><?php echo $data["id"] ;?></td>
                            <td><?php echo $data["nama"] ;?></td>
                            <td><?php echo $data["berat"] ;?></td>
                            <td><?php echo $data["tipe"] ;?></td>
                            <td><?php echo $data["status"] ;?></td>
                            <?php                             
                                $dikerjakan = $data["dikerjakan_oleh"];
                                $query2 = mysqli_query($conn,"select user.nama from trx join user on trx.dikerjakan_oleh = user.id where trx.dikerjakan_oleh = $dikerjakan  ");
                                $dt = mysqli_fetch_array($query2);
                                $worker = $dt["nama"];
                            ?>
                            <td><?php echo $worker ;?></td>
                            <td> <a href="selesai.php?id=<?php echo $data["id"]?>" class="btn btn-success btn-sm">selesai</a> | <a href="kerjakan.php?id=<?php echo $data["id"]?>" class="btn btn-warning btn-sm">Kerjakan</a></td>
                            </tr>
                        <?php $row = $row + 1; endforeach; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
  <script src="script.js"></script>

</body>

</html>