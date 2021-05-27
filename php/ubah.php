<?php
session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    require 'functions.php';



    $id = $_GET['id'];
    $pkn = query("SELECT * FROM pakaian WHERE id = $id")[0];


    if (isset($_POST['ubah'])) {
        if (ubah($_POST) > 0) {
            echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
        } else {
            echo "<script>
                        alert('Data Gagal diubah!');
                        document.location.href = 'admin.php';
                    </script>";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
<title>Document</title>
<link rel="stylesheet" type="text/css" href="../css/tambah.css">
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
    width: 40%;
    background: rgba(0, 0, 0, 0.4);
    height: 40%;
    padding: 20px;
    text-decoration: none;
    margin-top: 120px;
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
<div id="box" class="container">

    <h1>Ubah Data Fashion</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $pkn['id']; ?>">
        <ul>
            <li>
                <label for="gambar">Gambar </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $pkn['gambar']; ?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama  </label>
                <input type="text" name="nama" id="nama" required value="<?= $pkn['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="deskripsi">Description  </label>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $pkn['deskripsi']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga  </label>
                <input type="text" name="harga" id="harga" required value="<?= $pkn['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="ukuran">Ukuran  </label>
                <input type="text" name="ukuran" id="ukuran" required value="<?= $pkn['ukuran']; ?>"><br><br>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data!</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none;; color: black;">Kembali</a>
                </button>
            </li>
        </ul>
    </form>
</div>
</center>
</body>
</html>