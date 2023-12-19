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
    <link rel="stylesheet" href="style.css">
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

<!--Event section-->
<section class="Event">
    <div class="content">
        <h3> <span> EVENT </span></h3>
        <p>Menampilkan segala event yang akan berlangsung dan sedang berlangsung pada Unit Kegiatan Mahasiswa Universitas Negeri Surabaya</p>
        <a href="#about" class="btn">Lihat Event</a>
    </div>
    <div class="right">
        <img src="gambar/expo.png" alt="">
    </div>
</section>
<!--Event section-->

<!--Event-->
<section class="about" id="about">
    <h1 class="heading"><span> EVENT UKM </span> KAMI</h1>
    <div class="row">
        <div class="image">
            <img src="gambar/RamaSinta.jpg"/> </div>

            <div class="content">
            <h3>Pertunjukan Teater 'Rama Shinta' pada pentas seni Fakultas Bahasa dan Seni</h3>
            <p>Pertunjukan teater ini dipersembahkan oleh Unit Kegiatan Mahasiswa Teater
                sebagai bentuk memperingati hari teater sedunia yang jatuh pada tanggal
                27 Maret nanti. Pertunjukkan ini di dibuka untuk Mahasiswa Negeri Surabaya 
                secara gratis dan Masyarakat Umum dengan harga tiket masuk Rp. 10.000.
    </p>
            <a href="isievent.html" class="btn">Read More</a>
        </div>
    </div>

    <div class="row">
        <div class="image">
            <img src="gambar/RamaSinta.jpg"/> </div>

            <div class="content">
            <h3>Peduli Kemanusiaan untuk korban bencana alam gunung semeru</h3>
            <p>Unit Kegiatan Mahasiswa Peduli Kemanusiaan Universitas Negeri Surabaya melakukan
                penggalangan dana untuk para korban bencana alam gunung semeru yang telah erupsi 
                pada tanggal 03 February 2023 kemarin. bentuk bantuan ini bisa berupa dana, baju, 
                makanan pokok, selimut, dsb. ayo beri dukunganmu, UNESA for humanity!
    </p>
            <a href="isievent.html" class="btn">Read More</a>
        </div>
    </div>

    <div class="row">
        <div class="image">
            <img src="gambar/RamaSinta.jpg"/> </div>

            <div class="content">
            <h3>Lomba Fotografi tingkat nasional oleh AFO UNESA</h3>
            <p>Unit Kegiatan Mahasiswa Fotografi Universitas Negeri Surabaya atau biasa dikenal 
                dengan AFO UNESA ini sedang mengadakan lomba fotografi tingkat nasional yang bisa 
                diikuti oleh semua masyarakat umum termasuk dari mahasiswa universitas negeri surabaya 
                dengan syarat-syarat yang berlaku.nayo ikuti lombanya dan jadilah juaranya!
    </p>
            <a href="isievent.html" class="btn">Read More</a>
        </div>
    </div>

    <div class="row">
        <div class="image">
            <img src="gambar/RamaSinta.jpg"/> </div>

            <div class="content">
            <h3>Konser Gratis Peringatan Diesnatalis Kedua Unit Kegiatan Mahasiswa Padus dan Musik UNESA</h3>
            <p>Unit Kegiatan Mahasiswa Padus dan Musik Universitas Negeri Surabaya (UNESA) dengan bangga 
                mengumumkan acara istimewa untuk memperingati diesnatalis mereka yang ke-2. Dalam rangka 
                merayakan momen bersejarah ini, mereka akan menyelenggarakan konser gratis yang terbuka untuk 
                semua mahasiswa UNESA.
    </p>
            <a href="isievent.html" class="btn">Read More</a>
        </div>
    </div>

    <div class="row">
        <div class="image">
            <img src="gambar/RamaSinta.jpg"/> </div>

            <div class="content">
            <h3>Lomba Penulisan Karya Tulis Nasional Oleh Unit Kegiatan Ilmiah Mahasiswa UNESA</h3>
            <p>Unit Kegiatan Ilmiah Mahasiswa UNESA, yang dikenal dengan UKIM UNESA, akan mengadakan 
                Lomba Penulisan Karya Tulis tingkat nasional pada bulan September ini. Lomba ini terbuka 
                untuk semua kalangan, baik mahasiswa UNESA maupun mahasiswa dari luar UNESA. Catat timeline 
                lengkapnya dan daftarkan diri kamu segera!
    </p>
            <a href="isievent.html" class="btn">Read More</a>
        </div>
    </div>

    <div class="row">
        <div class="image">
            <img src="gambar/RamaSinta.jpg"/> </div>

            <div class="content">
            <h3>Pelatihan Jurnalistik Tingkat Dasar (PJTD) yang di selenggarakan oleh LPK GEMA 2023</h3>
            <p>Lembaga Pers kampus GEMA, yang sering disebut sebagai LPK GEMA, mengadakan Pelatihan 
                Jurnalistik Tingkat Dasar (PJTD) yang terbuka khusus bagi mahasiswa universitas negeri 
                Surabaya yang ingin mendalami dunia jurnalistik. Pelatihan ini akan di laksanakan selama 
                2 hari dengan beragam benefit yang bisa di dapat, jadi segera daftarkan dirimu! 
    </p>
            <a href="isievent.html" class="btn">Read More</a>
        </div>
    </div>
</section>
<link rel="stylesheet" href="style_beranda.css">       
<!--Event-->

<!--Retrospeksi-->
<div class="retrospeksi">
    <h1 class="heading"><span> PAST MEMORIES</span></h1>
</div>
<div class="gallery-wrap">
    <img src="gambar/tanda kiri.png" id="backBtn">
    <div class="gallery">
        <div>
                <span><img src="gambar/bantuan.jpg"></span>
                <span><img src="gambar/wayang.jpg"></span>
                <span><img src="gambar/tulus.jpg"></span>
            </div>
        <div> 
                <span><img src="gambar/pohon.jpg"></span>
                <span><img src="gambar/hindia.jpg"></span>
                <span><img src="gambar/menari.jpg"></span>
            </div>
        </div>
    <img src="gambar/tanda kanan.png" id="nextBtn">
</div>
<!--Retrospeksi-->

<!--FAQ-->
<section class="faq">
    
            <h2>FAQ</h2>
            
<div class="faqs">
    <div class="question">
        <h3>Apa itu event UKM?</h3>

        <svg width="15" height="10" viewbox="0 0 42 25">
            <path
            d="M3 3L21 21L39 3"
            stroke="white"
            stoke-width="7"
            stroke-linecap="round"
            />
        </svg>
    </div>

    <div class="answer">
        <p>Event ukm adalah suatu kegiatan yang dilakukan oleh masing-masing ukm
            pada setiap tahun. 
        </p>
    </div>
</div>
        
        <div class="faqs">
    <div class="question">
        <h3>Apakah event UKM berbayar?</h3>

        <svg width="15" height="10" viewbox="0 0 42 25">
            <path
            d="M3 3L21 21L39 3"
            stroke="white"
            stoke-width="7"
            stroke-linecap="round"
            />
        </svg>
    </div>

    <div class="answer">
        <p>Sebagian dari event UKM akan berbayar dan sebagian lainnya akan tidak berbayar, 
            jadi tergantung pada setiap event nya. 
        </p>
    </div>
</div>

        <div class="faqs">
    <div class="question">
        <h3>Apakah event UKM untuk umum?</h3>

        <svg width="15" height="10" viewbox="0 0 42 25">
            <path
            d="M3 3L21 21L39 3"
            stroke="white"
            stoke-width="7"
            stroke-linecap="round"
            />
        </svg>
    </div>

    <div class="answer">
        <p>Setiap event UKM yang terdapat di website merupakan event untuk umum, tidak hanya
            untuk para anggota UKM saja.
        </p>
    </div>
</div>

        <div class="faqs">
    <div class="question">
        <h3>Apakah event UKM dilaksanakan setiap tahun?</h3>

        <svg width="15" height="10" viewbox="0 0 42 25">
            <path
            d="M3 3L21 21L39 3"
            stroke="white"
            stoke-width="7"
            stroke-linecap="round"
            />
        </svg>
    </div>

    <div class="answer">
        <p>Event UKM pasti ada setiap tahun, tapi belum tentu setiap tahun akan mengadakan event yang sama
        </p>
    </div>
</div>

        <div class="faqs">
    <div class="question">
        <h3>Dimanakah event UKM dilaksanakan?</h3>

        <svg width="15" height="10" viewbox="0 0 42 25">
            <path
            d="M3 3L21 21L39 3"
            stroke="white"
            stoke-width="7"
            stroke-linecap="round"
            />
        </svg>
    </div>

    <div class="answer">
        <p>Tergantung dimana penyelanggara ingin menyelenggarakan, bisa cek detail pada info yang tertera
        </p>

    </div>
</div>

        <div class="faqs">
    <div class="question">
        <h3>Apakah event UKM terdapat lomba-lomba nasional?</h3>

        <svg width="15" height="10" viewbox="0 0 42 25">
            <path
            d="M3 3L21 21L39 3"
            stroke="white"
            stoke-width="7"
            stroke-linecap="round"
            />
        </svg>
    </div>

    <div class="answer">
        <p>Benar, sebagian event UKM adalah berupa lomba-lomba tingkat nasional yang bisa diikuti oleh siapa saja </p>
            </div>
        </div>
    </div> 
</div>
</section>

<!--FAQ-->

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

<script src="./app.js"></script>

    </body>
<html>
