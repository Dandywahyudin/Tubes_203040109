<?php

    // Mengecek apak adaid yang dikirimkkan
    // Jika tidak maka akan dikembalikan kehalaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
  <html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@400;500&display=swap" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/style.css"
      <!--Let browser know website is optimized for mobile-->
      <script src="https://kit.fontawesome.com/7de17a7070.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.1-web/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Fashion</title>
</head>
<style>
body{
    background-color: whitesmoke;
}

#box {
        width: 450px;
        height:450px;
        background:grey;
        text-align: center;
        display: inline-block;
        margin-top: 50px;
        border-radius: 50px;
        padding: 20px;
}

.kotak{
    text-align: center;
    padding: 20px;
}

p {
    font-family: 'Farro', sans-serif;
}
</style>
<body>
    <center>
    <div id="box" class="kotak">
        <img class = "ard" src= "../assets/img/<?= $pakaian["gambar"]; ?>" alt = "" width="200px">
    
    <div class="col m6 w">
        <div class="keterangan">
            <p style="font-size: 20px;"><?= $pakaian["nama"]; ?></b></p>
            <p> <?= $pakaian["deskripsi"]; ?></p>
            <p>RP.<?= $pakaian["harga"]; ?></p>
            <p>Ukuran : <?= $pakaian["ukuran"]; ?></p>
        </div>
        <a href="../index.php">
        <button class="waves-effect waves-light btn">Kembali</button>
        </a>
    </div>
    </div>
    </center>
</body>
</html>