<?php
    session_start();
    $error = '';

    if(isset($_POST['submit'])){
        if(empty($_POST['uname']) || empty($_POST['passw'])){
            $error="username or password is empty";
        }
        else{
            $user = $_POST['uname'];
            $pass = $_POST['passw'];

            include("connection.php");
            $query = mysqli_query($conn, "select * from user where username = '$user' AND password = '$pass'");
            $row = mysqli_num_rows($query);

            if ($row == 1){
                $_SESSION["uname"] = $user;
                $_SESSION["passw"] = $pass;
                $data = mysqli_fetch_array($query);
                $nama = $data["nama"];
                $role = $data["role"];
                $email = $data["email"];
                $id = $data["id"];
                if ($data["role"] == "admin"){
                    $_SESSION["nama"] = $nama;
                    $_SESSION["role"] = $role;
                    $_SESSION["email"] = $email;
                    $_SESSION["id"] = $id;
                    // header("location : /project-pweb/login_page");
                    echo "<script>
                    alert('Berhasil Login');
                    document.location.href = '/project-pweb/login_page/';
                  </script>";
                }
                else{
                    $_SESSION["nama"] = $nama;
                    $_SESSION["role"] = $role;
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;
                    // header("location : /project-pweb/login_page");
                    echo "<script>
                    alert('Berhasil Login');
                    document.location.href = '/project-pweb/login_page/';
                  </script>";
                }
            }
            else{
                $error = "* username or password is wrong";
            }
            mysqli_close($conn);
        }
    }
?>