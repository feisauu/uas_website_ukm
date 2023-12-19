<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website UKM</title>
    <link rel="shortcut icon"  href="gambar/logo_judul.png" type="image/x-icon">
    <link rel="stylesheet" href="style_profile.css">
</head>
<body>

    <!--header-->
    <header class="header">
    <a href="#" class="logo"><img src="gambar/spinner_icon.png"> UKM UNESA </a>
 
<nav class="navbar">
    <a href="index.php">Beranda</a>
    <a href="profile.php">Profil</a>
    <a href="berita_terkini.php">Berita Terkini</a>
    <a href="Event.php">Event</a>
    <a href="kontak.php">Kontak</a>
 </nav>

 <div class="icons">
    <div class="menu"><img src="gambar/menu_icon.png"></div>
    <div class="search"><img src="gambar/search_icon.png"></div>
    <span><?php showNavbar(); ?></span>
    </div>

 <form action="" class="search-form">
    <input type="search" id="search-box" placeholder="Search here...">
    <img class="icon" src="gambar/search_icon.png" alt="">
 </form>

 <form action="" method="post" class="login-form" id="loginForm">
    <h3>Login Now</h3>
    <input type="email" name="email" placeholder="Your Email" class="box">
    <input type="password" name="password" placeholder="Your Password" class="box">
    <p>Forget your password <a href="#">Click Here</a></p>
    <p>Don't Have Any Account? <a href="#" onclick="toggleForm()">Create Now</a></p>
    <input type="submit" name="login-submit" value="Login Now" class="btn">
</form>

<form action="" method="post" class="register-form" id="registerForm">
    <h3>Register Now</h3>
    <input type="text" name="reg-username" placeholder="Username" class="box">
    <input type="email" name="reg-email" placeholder="Your Email" class="box">
    <input type="password" name="reg-password" placeholder="Your Password" class="box">
    <p>Have Any Account? <a href="#" onclick="toggleForm()">Login Now</a></p>
    <input type="submit" name="register-submit" value="Register" class="btn">
</form>

</header>
<!--header-->

<!--contact-->
<section id="contact" class="contact">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.363924075711!2d112.7255654750956!3d-7.312951071904023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb13c114e227%3A0x8cf0d2f920397f5a!2sUKM%20Center%20Universitas%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1698101574990!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

        <form action="">
            <div class="input-group">
                <i><img src="gambar/user_icon.png" alt=""></i>
                <input type="nama" placeholder="Nama" class="box"></div>
            <div class="input-group">
                <i><img src="gambar/email_icon.png" alt=""></i>
                <input type="email" placeholder="Email" class="box"></div>
            <div class="input-group">
                <i><img src="gambar/call_icon.png" alt=""></i>
                <input type="no_telp" placeholder="Nomor Telepon" class="box"></div>            
            <button type="submit" class="btn">Kirim</button>
        </form>
    </div>
</section>
<!--contact-->
    
<!--footer section-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>
                <img src="gambar/spinner_icon.png" alt=""> UKM UNESA 
            </h3>
            <p>Unit Kegiatan Mahasiswa - Universitas Negeri Surabaya</p>
            <div class="share">
                <a href="#"><img src="gambar/fb_icon.png" alt=""></a>
                <a href="#"><img src="gambar/x_icon.png" alt=""></a>
                <a href="#"><img src="gambar/ig_icon.png" alt=""></a>
            </div>
        </div>

        <div class="box">
            <h3>
                Contact Us
            </h3>
            <a href="#" class="links"><i><img src="gambar/call_icon_orange.png" ></i>+123-456-789</a>
            <a href="#" class="links"><i><img src="gambar/call_icon_orange.png" ></i>+111-222-333</a>
            <a href="#" class="links"><i><img src="gambar/email_icon_orange.png"></i>ukmunesa@unesa.ac.id</a>
            <a href="#" class="links"><i><img src="gambar/map_icon_orange.png"  ></i>Surabaya, Jawa Timur</a>                  
        </div>
        <div class="box">
            <h3>
                Quick Link
            </h3>
            <a href="index.php" class="links"><i><img src="gambar/panah_icon_orange.png" ></i>Beranda</a>
            <a href="profile.php" class="links"><i><img src="gambar/panah_icon_orange.png" ></i>Profil</a>
            <a href="berita_terkini.php" class="links"><i><img src="gambar/panah_icon_orange.png" ></i>Berita Terkini</a>
            <a href="Event.php" class="links"><i><img src="gambar/panah_icon_orange.png" ></i>Event</a> 
            <a href="kontak.php" class="links"><i><img src="gambar/panah_icon_orange.png" ></i>Kontak</a>
        </div>
    </div>
    <div class="credit">Created by <span>Kelompok 4 MIB</span> | All Rights Reserved</div>
</section>
<!--footer section-->

<script src="javascript.js"></script>
</body>
</html>
