<?php
include ("connection.php");
if (isset($_POST["del"])){
    $id = $_SESSION["id"];
    $query = mysqli_query($conn,"delete from user where id = $id ");
    session_destroy();
    echo "<script>
            alert('akun anda sudah dihapus');
            document.location.href = '/project-pweb/login_page/';
          </script>
            ";
}
?>