<?php
    session_start();
    $error = '';
    function validate($a,$b,$c,$d){
        include("../../../process/connection.php");
        $query = "insert into trx (berat,nama,tipe,harga) VALUES ($a,'$b','$c',$d) ";
        if($conn->query($query) === TRUE){
             $error = "Berhasil Menambahkan";
        }
        else{
            $error = "gagal";
        }
        
    }
    function getid ($a,$b,$c){
        include("../../../process/connection.php");
        $query = "select * from trx where berat = $a And nama = '$b' and tipe = '$c' ORDER by id desc limit 1;";
        $run = mysqli_query($conn, $query);
        $dt = mysqli_fetch_array($run);
        $code = $dt["id"];
        return $code;
    }
    $code = '';
    $harga = '';
    $berat = '';
    $nama = '';
    $tipe = '';
    if (isset($_POST['transaksi'])){
        if (empty($_POST["berat"]) || empty($_POST["nama"]) || empty($_POST["tipe"])){
            $error = "Pastikan Semua Kolom Terisi";
        }
        else{
            $berat = $_POST["berat"];
            $nama = $_POST["nama"];
            $tipe = $_POST["tipe"];
            $id = $_SESSION["id"];
            if ($tipe == "cucian kering"){
                $harga = $berat * 7000;
                validate($_POST["berat"],$_POST["nama"],$_POST["tipe"],$harga);
                // getcode($berat,$nama,$tipe);  
                $code = getid($berat,$nama,$tipe);
                
                
            }
            elseif ($tipe == "cucian basah") {
                $harga = $berat * 5000;
                validate($_POST["berat"],$_POST["nama"],$_POST["tipe"],$harga);
                // getcode($berat,$nama,$tipe);  include("../../../process/connection.php");
                $code = getid($berat,$nama,$tipe);
            }
            else{
                $error = "gagal menambahkan data";
            }
        }
    }
   
  