<?php

   require 'php/functions.php';

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

    <style>
    .nav-wrapper .input-field{
      height: initial;
      color: grey;
    }

    .parallax-container {
    height: 200px;
    }

    </style>
    </head>
    
<body id="home" class="scrollspy" style="background-color: #e0e0e0;">
<!-- header -->
<div class="navbar-fixed">
<nav class="grey darken-1">
    <div class="container">
      <div class="nav-wrapper">
      
        <a href="#home" class="brand-logo" style="font-family: 'Chakra Petch', sans-serif;">DANStore</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#shop" style="font-family: 'Chakra Petch', sans-serif; font-size: 18px;">Shop</a></li>
            <li><a href="#contact" style="font-family: 'Chakra Petch', sans-serif; font-size: 18px;">Contact</a></li>
            <li><form action="#shop" method="get" >
            <input  id="search" type="search" placeholder="Search" name="keyword" required autofocus style="width: 180px; margin-left: 20px;">
            <button  type="submit" name="cari" style="margin-right: 100px;">Search</button>
            </form>
            </li>
            <li>
            <a href="php/login.php">
             <button class="waves-effect waves-light btn" style="border-radius: 30px;" type="submit" name="cari">Login</button>
             </a>
             </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
 
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#shop">Shop</a></li>
    <li><a href="#contact">contact</a></li>
    <li>
      <form action="#shop" method="get" >
        <input  id="search" type="search" name="keyword" required autofocus style="width: 180px; margin-left: 20px;">
          <button  type="submit" name="cari" style="margin-right: 100px;">Search</button>
      </form>
    </li>
    <li>
            <a href="php/login.php">
             <button class="waves-effect waves-light btn" style="border-radius: 20px;" type="submit" name="cari">Login</button>
             </a>
             </li>
  </ul>

<div >
<div class="slider">
  <ul class="slides">
    <li>
      <img src="assets/img/slider/slider1.jpg"> 
      <div class="caption center">
        <h3 style="color: white; margin-top: 130px; font-family: 'Farro', sans-serif;">Welcome</h3>
        <h5 class="light grey-text text-lighten-3" style="font-family: 'Farro', sans-serif; font-size:30px;">Pakaian Santai untuk melengkapi koleksi pakaian Anda</h5>
        <div class="carousel-fixed-item center" style="padding: 50px;">
          <a href="#shop" class="grey darken-2 btn-large" style="border-radius: 10px; text-shadow: 10px;">Belanja Sekarang</a>
        </div>    
      </div>
    </li>
    <li>
      <img src="assets/img/slider/slider2.jpg"> 
      <div class="caption center">
        <h3 style="color: white; margin-top: 130px; font-family: 'Farro', sans-serif;">Holiday Sale!</h3>
        <h5 class="white-text" style="font-family: 'Farro', sans-serif; font-size:30px;">Cashback 200.000,- untuk total pembelian produk fashion senilai 1 juta</h5>
        <div class="carousel-fixed-item center" style="padding: 50px;">
          <a href="#shop" class="btn grey darken-2 btn-large" style="border-radius: 10px; text-shadow: 10px; ">Belanja Sekarang</a>
        </div> 
      </div>
    </li>
    <li>
      <img src="assets/img/slider/slider3.jpg"> 
      <div class="caption center">
        <h3 style="color: white; margin-top: 130px; font-family: 'Farro', sans-serif; font-size:30px;">Dapatkan Diskon Menarik dan Gratis Ongkir</h3>
        <h5 class="white-text " style="font-family: sans-serif; font-size:12px;">*Syarat & ketentuan berlaku</h5>
        <div class="carousel-fixed-item center" style="padding: 50px;">
          <a href="#shop" class="btn grey darken-2 btn-large" style="border-radius: 10px;">Belanja Sekarang</a>
        </div> 
      </div>
    </li>
  </ul>
</div>


<div class="container scrollspy">
<div id="shop" class=" scrollspy">
      <h4 style="text-align: center; padding: 40px">SHOP</h4>
        <?php if (empty($pakaian)) : ?>
            <h1>Data Tidak ditemukan!</h1>
        <?php else : ?>
            <div class="row">
                <?php foreach ($pakaian as $pkn) : ?>
                    <div class="col m3 s12" style="margin-block: center;">
                        <div class="card">
                            <div class="card-image">
                                <img src= "assets/img/<?= $pkn["gambar"]; ?>" max-width="10px" class="responsive-img materialboxed" alt="...">
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <p class = "nama" style="text-align: center;">
                                
                                    <?= $pkn["nama"] ?>
                                </a>
                                </p>
                                </div>
                            </div>
                            <div class="card-action" style="text-align : center;">
                            <button class="tombol-beli" style="text-align : center; width: 45px;"><a href="php/detail.php?id=<?= $pkn['id'] ?>">Beli </a></button>
                            <button class="tombol-beli" style="text-align : center; width: 60px;"><a href="php/detail.php?id=<?= $pkn['id'] ?>">Detail </a></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
  </div>
</div>

<footer style="background-color: grey;">
    <div class="container scrollspy">
    <div class="row" style="margin-bottom: auto; margin-top: 200px; padding: 20px;">
        <div class="col m3 s12 center">
            <p style="color: rgba(0, 0, 0, 0.665)">
            <i class="fas fa-tshirt fa-5x"></i>
            </p>
            <h5>Trusted Quality</h5>
            <p style="font-size: 14px;" >Crafted from the finest fabrics and materials.</p>
        </div>
        <div class="col m3 s12 center">
            <p style="color: rgba(0, 0, 0, 0.665)">
            <i class="fas fa-money-check-alt fa-5x"></i></p>
            <h5>Payment Convenience</h5>
            <p style="font-size: 14px;">We provide several payment method for customer satisfaction.
            </p>
        </div>
        <div class="col m3 s12 center">
            <p style="color: rgba(0, 0, 0, 0.665)">
                <i class="fas fa-clipboard-check fa-5x"></i></p>
                <h5>Delivery Protection</h5>
                <p style="font-size: 14px;">We have a remarkable on-time delivery method and easy return.
            </p>
        </div>
        <div class="col m3 s12 center">
            <p style="color: rgba(0, 0, 0, 0.665)">
                <i class="fas fa-headset fa-5x"></i></p>
                <h5>Customer Care</h5>
                <p style="font-size: 14px;">We have an online chat through Live Chat, Whatsapp, Line@ (08:00 - 22:00).
            </p>
        </div>
    </div>
</div>
</footer>

<!-- footer2 -->
<footer id="contact" class="scrollspy" style="background-color: rgba(0, 0, 0, 0.910); padding: 25px;" class="text-white p-4">
    <div class="container scrollspy">
        <div class="row">
            <div class="col m3 s12" style="color: white;">
                <p>Contact Us</p>
                <P>Store</P>
                <p>About Us</p>
                <p>Why Us</p>
                
            </div>
            <div class="col m3 s12" style="color: white;">
                <p>Delivery</p>
                <p>Return</p>
                <p>Terms and Conditions</p>
                <P>Privacy Policy</P>
            </div>
            <div class="col m3 s12" style="color: white;">
                <p>News</p>
                <p>Shopping</p>
                <p>Payment Confirmation</p>
                <P>FAQ</P>
            </div>
            <div class="col m3 s12" style="color: white;">
                <p>
                    <a href="https://instagram.com/dandywahyudinn" alt="instagram" class="fab fa-instagram fa-2x" style="color: white; text-decoration: none;"></a>
                    <a href="https://github.com/Dandywahyudin" alt="github" class="fab fa-github-square fa-2x" style="color: white; text-decoration: none;"></a>
                </p>
                <p>
                    
                </p>
                <p style="font-size: 13px;">Whatsapp : 08996901370</p>
                <p style="font-size: 13px;">Line : Dandywahyudin</p>
              
            </div>

            
        </div>
        
    </div>
</footer>


<footer class="">
    <p style=" font-size: 13px; text-align:center;">Copyright 2020 ©.</p>
</footer>

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

            const materialbox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialbox);

            const scroll = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scroll, {
                scrollOffset: 50
            });
    </script>
    
    </body>
  </html>
        