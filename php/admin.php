<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
  }
require 'functions.php';


if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $pakaian = query("SELECT * FROM pakaian WHERE
          gambar LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' OR
          harga LIKE '%$keyword%' OR
          ukuran LIKE '%$keyword%' ");
  } else {
    $pakaian = query("SELECT * FROM pakaian");
  }

?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body style="background-color: #e0e0e0;">
    <table class="highlight centered">
    <div class="navbar-fixed">
    <nav class="grey darken-1">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="padding-left: 20px;">DANStore</a>
      <a href="#" data-target="mobile-nav" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light btn"  style="float: right; margin:20px;" ><i class="material-icons left">add</i>Tambah Data</a>
        </div>
        </li>
        <li>
          <form action="" method="get">
            <input id="search" type="search" placeholder="search" name="keyword" required autofocus style="width: 200px;">
            <button type="submit" name="cari" style="margin-right: 100px;">cari!</button>
          </form>
        </li>
        <li>
        <div class="logout">
          <a href="logout.php">logout</a>
        </div>
        </li>
      </ul>
    </div>
  </nav>
</div>

<ul class="sidenav" id="mobile-nav">
    <li><div class="add">
    <a href="tambah.php" class="waves-effect waves-light btn"  style="float: right; margin:20px;" ><i class="material-icons left">add</i>Tambah Data</a>
    </div></li>
    <li><form action="#shop" method="get" >
            <input  id="search" type="search" placeholder="Search" name="keyword" required autofocus style="width: 180px; margin-left: 20px;">
            <button  type="submit" name="cari" style="margin-right: 100px;">Search</button>
            </form>
    </li>
  </ul>

<h4 style="text-align:center;">Selamat Datang Admin!</h4>
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama Pakaian</th>
        <th style="text-align: center;">Deskripsi</th>
        <th>Harga</th>
        <th>Ukuran</th>
        <th>OPSI</th>
    </tr>
    
    <?php $i = 1;?>
    <?php foreach ($pakaian as $pkn): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="../assets/img/<?= $pkn['gambar']; ?>" width="100px" alt=""></td>
            <td><?= $pkn['nama']; ?></td>
            <td><?= $pkn['deskripsi']; ?></td>
            <td>Rp.<?= $pkn['harga']; ?>,-</td>
            <td><?= $pkn['ukuran']; ?></td>
            <td>
            <a href="ubah.php?id=<?= $pkn['id']?>" class="waves-effect waves-light btn" style="background-color: orange; width: 80px;>">Ubah</button></a><br>
            <br><a href="hapus.php?id=<?=$pkn['id']; ?>" onclick="return confirm('Hapus Data??')" class="waves-effect waves-light btn" style="background-color: green; width: 80px;">Hapus</button></a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        </div>
        </div>
    </table>

     <!--JavaScript at end of body for optimized loading-->
     <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
            M.Slider.init(slider, {
                indicators: false,
                height: 500,
                transition: 100,
                interval: 3500
            });

            const parallax = document.querySelectorAll('.parallax');
            M.Parallax.init(parallax);

            const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox);

            const scroll = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scroll, {
                scrollOffset: 50
            });
    </script>
    
    </body>
  </html>
        