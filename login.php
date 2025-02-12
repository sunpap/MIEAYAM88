<?php

session_start();

require_once "function.php";

if (isset($_POST["login"])) {

    $login = login_akun();

} else if (isset($_POST["register"])) {

    $register = register_akun();

    echo $register > 0

        ? "<script>

            alert('Berhasil Registrasi!');

            location.href = 'login.php';

        </script>"

        : "<script>

            alert('Gagal Registrasi!');

            location.href = 'login.php';

        </script>";

}

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./src/css/bootstrap-5.2.0/css/bootstrap.min.css">
    
    <style>
        body {
            font-family: "Poppins", serif;
        }
    </style>
    <title>Login</title>

</head>



<body class="bg-dark">

        <h3 style="color: white; font-weight: 700; font-family: 'Poppins', serif; text-align: center; margin-top: 30px; font-style: italic;">Kedai Mie Ayam Bangka 88</h3>

    <div class="container" >

        <div id="judul-form" class="text-center h1 mt-5" style="color: white">LOGIN</div><br>

        <div class="mx-auto rounded p-5" style="width: 500px;   height: 350px;
  background-color: rgba(255, 255, 255, 0.13);
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  border-radius: 10px;
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
  padding: 50px 35px;">

            <!-- Tab Login & Register -->

            <div class="d-flex justify-content-between">

                <button id="tab-login" class="btn btn-primary fw-bold" style="width: 190px;">LOGIN</button>

                <button class="btn btn-outline-primary fw-bold" style="width: 190px;">REGISTER</button>

            </div><br>

            <!-- Jika Username & Password Login Salah -->

            <?php if (isset($_POST["login"])) {

                    if (!$login) { ?>

                    <div class="alert alert-danger alert-dismissible">

                        * username/password salah

                        <button class="btn-close" data-bs-dismiss="alert"></button>

                    </div>

            <?php }

            } ?>

            <!-- Form Login & Register -->

            <form id="form" action="login.php" method="POST">

                <input class="form-control mx-auto d-block" type="text" autocomplete="off"  name="username" placeholder="Username" required><br>

                <input class="form-control mx-auto d-block" type="password" autocomplete="off" name="password" placeholder="Password" required><br>

                <button class="btn btn-primary" name="login">Login</button>

            </form>

        </div>

    </div>

    <script src="./src/css/bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>

    <script src="./src/js/login.js"></script>

</body>



</html>