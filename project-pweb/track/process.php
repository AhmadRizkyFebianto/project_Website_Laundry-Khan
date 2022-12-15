<?php
include("../process/connection.php");
$error = "";
if (isset($_POST["cari"])){
    $code = $_POST['search'];
    $query = "select * from trx where id = $code";
    $run = mysqli_query($conn,$query);
    $row = mysqli_num_rows($run);
    if($row == 1){
        $data = mysqli_fetch_array($run);
        $nama = $data["nama"];
        $berat = $data["berat"];
        $status = $data["status"];
        $tipe = $data["tipe"];
    }
    else {
        $error = "Anda Salah Memasukkan Kode";
    }
}
?>