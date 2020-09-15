<?php

require_once 'functionmakan.php';

if (isset($_POST['registrasi'])) {
    if (registrasiadmin($_POST) > 0) {
        echo "<script>
                alert('Berhasil registrasi');
                window.location.href='login.php';
            </script>";
    } else {
        echo "<script>
                alert('gagal registrasi');
                window.location.href='registrasiadmin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/yuansandra.jpg">
</head>

<body>
    <img src="./img/wave.png" class="wave" alt="">
    <div class="container">

        <div class="img">
            <img src="./img/laravel.svg" alt="">
        </div>

        <div class="login-content">
            <form action="" method="post">

                <img class="avatar" src="./img/avatar.svg" alt="">
                <h2>ckb logistics</h2>

                <div class="input-div one focus">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>

                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username" id="username" placeholder="Username">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>

                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fa fa-unlock-alt"></i>

                    </div>

                    <div>
                        <h5>Confirm Password</h5>
                        <input type="password" class="input" name="password2" placeholder="Confirm Password">
                    </div>
                </div>
                <a href="login.php">Login</a>
                <input type="submit" name="registrasi" class="btn" value="Login">

            </form>
        </div>

    </div>

    <script src="./js/all.js"></script>


</body>

</html>