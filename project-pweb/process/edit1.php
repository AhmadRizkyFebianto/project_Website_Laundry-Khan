<?php
  include ("connection.php");
    if(isset($_POST["submit"])){
        $oldpw = $_POST["password"];
        $newpw = $_POST["new-password"];
        $validpw = $_SESSION["passw"];
        $id = $_SESSION["id"];
        if ($oldpw == $validpw){
            $query = mysqli_query($conn,"update user set password = '$newpw' where id = $id");
            $_SESSION["passw"] = $newpw;
            echo "<script>
            alert('berhasil mengganti password');
            document.location.href = '/project-pweb/login_page/Pegawai/profil_pegawai.php';
          </script>
            ";
        }
    }
?>