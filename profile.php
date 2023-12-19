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

<!--UKM-->
<section class="about" id="about">
    <h1 class="heading1"> Profil <span> UKM </span></h1>
    <div class="row">
        <div class="image">
            <img src="gambar/expo.png"/> </div>

            <div class="content">
            <h3>Apa itu UKM?</h3>
            <p>Unit Kegiatan Mahasiswa (UKM) adalah organisasi intra Universitas Negeri
                Surabaya di luar organisasi mahasiswa (ormawa) yang berfungsi sebagai wadah
                pengembangan potensi minat, bakat, dan penalaran mahasiswa Universitas Negeri
                Surabaya.</p>
        </div>
    </div>
</section>
<!--UKM-->

<!--Sejarah UKM-->
<section class="about" id="about">
    <h1 class="heading2"> Sejarah <span> UKM </span></h1>
    <div class="row">
        <div class="image2">
            <img src="gambar/yuhu.jpeg"/> </div>

            <div class="content">
            <h3>Bagaimana Sejarah UKM?</h3>
            <p>Unit Kegiatan Mahasiswa Universitas Negeri Surabaya berdiri di awal tahun 2000 sebagai wadah untuk mengasah minat dan bakat mahasiswa dalam berbagai bidang seni dan kreativitas. Menyatukan mahasiswa dengan minat seni rupa, musik, tari, sastra, dan fotografi, UKM ini tumbuh menjadi sebuah keluarga kreatif yang saling mendukung. Mereka tidak hanya mengadakan pameran seni dan pertunjukan musik, tetapi juga memberikan kontribusi positif kepada kampus dan masyarakat sekitarnya. UKM adalah cermin semangat, kreativitas, dan rasa ingin tumbuh bersama, menginspirasi mahasiswa untuk terus berkembang dan memberikan dampak positif melalui seni di lingkungan kampus dan lebih jauh lagi.</p>
        </div>
    </div>
</section>
<!--Sejarah UKM-->

<!--Visi Misi UKM-->
<section class="about" id="about">
    <h1 class="heading2"> Visi & Misi <span> UKM </span></h1>
    <div class="row">
            <div class="content">
            <h3>Visi</h3>
            <p>"Menjadi UKM yang unggul dalam pengembangan minat, bakat, dan kreativitas mahasiswa untuk menciptakan kontribusi positif dalam lingkungan universitas dan masyarakat."</p>
            <h3>Misi</h3>
                <li>Memberikan wadah bagi mahasiswa untuk mengembangkan minat dan bakat mereka.</li>
                <li>Mengorganisir kegiatan yang mendukung pengembangan keterampilan dan peningkatan pengetahuan bagi mahasiswa.</li>
                <li>Mendorong semangat kebersamaan, rasa solidaritas, dan kepedulian sosial di antara anggota UKM.</li>
        </div>
    </div>
</section>
<!--Visi Misi UKM-->

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
