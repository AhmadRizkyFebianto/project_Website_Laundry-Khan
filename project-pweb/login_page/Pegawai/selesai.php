<?php
include("../../process/connection.php");
session_start();
$id = $_GET["id"];
$id2 = $_SESSION["id"];
$query = mysqli_query($conn,"update trx set status = 'selesai',dikerjakan_oleh = $id2  where id = $id");

// $kerjakan = mysqli_num_rows($query);
// $kerjakan = 1;
if ($query){
    echo "<script>
    alert('Pesanan sudah diselesaikan oleh id $id');
    document.location.href = 'index.php' ;
    </script>";
}
?>