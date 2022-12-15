<?php
include ("../process/connection.php");
$error = "";

if (isset($_POST["submit"])){
    if (!isset($_POST["nama"]) || !isset($_POST["email"]) || !isset($_POST["Username"]) || !isset($_POST["Password"])  || !isset($_POST["Confirm-pass"])){
        $error = "Pastikan Semua Kolom Terisi";
    }
    else {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $username = $_POST["Username"];
        $password = $_POST["Password"];
        $confirm = $_POST["Confirm-pass"];
        if ($password == $confirm){
            $query = "insert into user (nama,username,password,email) values ('$nama','$username','$password','$email')";
            if($conn->query($query) === TRUE){
                session_start();
                session_destroy();
                mysqli_close($conn);
                header("location: /project-pweb/login_page/");
            }
            else{
                $error = "Gagal Membuat Akun";
            }
        }
        else{
            $error = "Check Kembali Kesamaan Password Anda";
        }
    }
}