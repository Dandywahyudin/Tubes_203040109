<?php 
    session_start();
    require 'functions.php';
    if (isset($_SESSION['username'])){
        header("Location: admin.php");
        exit;
    }

    if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];
      
        // ambil username berdasarkan id
        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);
      
        // cek cookie dan username
        if ($hash === hash('sha256', $row['id'], false)) {
          $_SESSION['username'] = $row['username'];
          header("Location: admin.php");
          exit;
        }
      }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    
        if (mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);
            if (password_verify($password, $row['password'])){
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);
            }
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
              }        
            if (hash('sha256', $row['id'] == $_SESSION['hash'])) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
            }
        $error = true;
    }
?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css"
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        background: url(login.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: sans-serif;
        color: white;
        
    }

    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        width: 280px;
        box-shadow: 0 0 10px 5px black;
        border-radius: 20px;
    }

    .avatar {
        font-size: 50px;
        color: salmon;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        position: fixed;
        left: 50%;
        top: 0;
        transform: translate(-100%, -100%);
    }

    .login h2{
        text-align: center;
        color: white;
        padding-top: 10px;
        letter-spacing: 5px;
    }

    .box-login{
        display: flex;
        justify-content: space-between;
        margin-bottom: 25px;
        border-bottom: 2px solid white;
        padding: 8px 0;
    }

    .box-login input{
        width: 100%;
        padding: 0 10px;
        background: none;
        border: none;
        outline: none;
        color: white;
    }

    .box-login input::placeholder{
        color: white;
    }

    .box-login i {
        font-size: 20px;
        color: white;
    }

    .btn-login {
        width: 100%;
        background: none;
        padding: 15px;
        border: 1px solid white;
        font-size: 18px;
        letter-spacing: 5px;
        color: white;
        cursor: pointer;
    }
    .bottom {
        display: flex;
        justify-content: space-between;
        text-align: center;
    }

    .bottom a{
        color: white;
        font-size: 14px;
        
    }

    .registrasi {
        margin-top: 20px;
        margin-left: 20px;
    }
    </style>
</head>
<body>
<div class="login">
<div class="avatar">
    <i class="large material-icons" style="font-size: 100px;">account_circle</i>
</div>

<h2>Login Form</h2>
<form action="" method="post">
    <?php if (isset($error)) : ?>
    <p style="color : red; font-style: italic;">username dan password salah</p>
    <?php endif; ?>
    <div class="box-login">
        <i class="small material-icons" for="username" style="font-size: 30px;">perm_identity</i>
        <input type="text" name="username" placeholder="Username"></td>
    </div>
    <div class="box-login">
        <i class="small material-icons" for="password" style="font-size: 30px;">lock</i>
        <input type="password" name="password" placeholder="Password"></td>
    </div>
    <div class="remember" style="margin-bottom: 10px; font-size: 12px;">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" class="btn-login" name="submit">Login</button>
    <div class="bottom" >
    <div class="registrasi" >
        <a href="registrasi.php">Don't have an account? Register</a><p>
    </div>
    </div>
</form>
</div>
</div>
</body>
</html>
