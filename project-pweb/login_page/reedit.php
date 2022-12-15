<?php
    include ("../process/connection.php");
    if (isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confrm = $_POST["confirm-password"];
        if ($password == $confrm){
            $ran = "update user set password = '$password' where email = '$email'";
            if($conn->query($ran) === TRUE){
                echo "<script>
                        alert('berhasil mengganti password');
                        document.location.href = '/project-pweb/login_page/';
                       </script>
                    ";      
            }
            else{
                echo "<script>
                alert('gagal mengganti password');
                document.location.href = '/project-pweb/login_page/';
               </script>
            ";      
            }
        }
    }
?>