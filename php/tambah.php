<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';


    if (isset($_POST['tambah'])){
        if (tambah($_POST) > 0){
            echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
        }else{
            echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    margin: 0;
        padding: 0;
        background: url(login2.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: sans-serif;
        color: white;
}

#box{
    width: 450px;
    background: rgba(0, 0, 0, 0.4);
    height: 500px;
    padding: 20px;
    text-decoration: none;
    margin-top: 50px;
    display: inline-block;
    border: 3px black solid;
}

ul, li {
    list-style-type:none;
    margin-right: 23px;
    color: whitesmoke;
    font-size: 18px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}

.kotak label{
    padding-bottom: 5px;
    display: inline-block;
}

h1 {
    font-family:sans-serif;
}

button {
    background-color: burlywood;
    color: red;
}

</style>
<body>
    <center>
    <div id="box" class="kotak">
    <form action="" method="post">
        <h1>Tambah Data</h1>
    <ul>
    <li>
            <label for="gambar">Gambar</label><br>
            <input type="Gambar" name="gambar" id="gambar" required><br><br> 
        </li>
        <li>
            <label for="name">Nama</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="deskripsi">Deskripsi</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required><br><br>
        </li>
        <li>
            <label for="harga">Harga</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </li>
        <li>
            <label for="ukuran">Ukuran</label><br>
            <input type="text" name="ukuran" id="ukuran" required><br><br>
        </li>
        <br>
    <button type="submit" name="tambah">Tambah Data</button>
    <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
    </button>
    </ul>
    </form>
    </div>
    </center>
</body>
</html>