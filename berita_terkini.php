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
    <link rel="stylesheet" href="style_berita_terkini.css">
    <script src ="berita_terkini.js" ></script>
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

<!--judul-->
<div id="beritaTerkini">
    <div class="center">
        <h1 class="judul">BERITA TERKINI UKM UNIVERSITAS NEGERI SURABAYA</h1>
    </div>
</div>
<!--akhir judul-->

<!--Hot news-->
    <div id="hot">
        <div class="center">
            <div class="hot">
                <div class="lain">
                    <div class="tanggal">
                        <h3><a href=""> 15 Agustus 2023 </a></h3>
                        <div class="isi">
                            <img src="imgBT/kemanusiaan.png">
                            <p> AKSARA (Abdi Karya Nusantara) merupakan salah satu program kerja divisi pendidikan.
                                Program kerja ini dilaksanakan pada tanggal 14-17 Agustus 2023 di Desa Kunjorowesi Kec.
                                Ngoro, Kab. Mojokerto. </p>
                        </div><!--akhir isi berita 15 agustus-->
                    </div><!--akhir berita 15 agustus-->
                    <div class="tanggal">
                        <h3><a href=""> 26 February 2023</a></h3>
                        <div class="isi">
                            <img src="imgBT/teater.png">
                            <p> Gelar Karya Teater Institut Mempersembahkan "Ladang Binatang". </p>
                        </div><!--akhir isi berita tanggal 26 February-->
                    </div><!--akhir berita 26 February-->
                    <div class="tanggal">
                        <h3><a href=""> 26 September 2023</a></h3>
                        <div class="isi">
                            <img src="imgBT/ukki.jpg">
                            <p> Bidang Seni Budaya UKKI Unesa hadir untuk menemani waktu luang kalian dengan mengadakan
                                pelatihan kaligrafi. </p>
                        </div><!--akhir isi berita tanggal 26 sept-->
                    </div><!--akhir berita 26 sept-->
                </div><!--akhir lain-->
                <section class="beritaBaru" id="beritaBaru">
                    <div class="judul"> HOT NEWS <span> UKM </span></div>
                    <div class="row">
                        <div class="image">
                            <img src="imgBT/kemanusiaan2.png"/> </div>
                            <div class="content">
                            <h3>Relawan UNESA Terjun ke Lokasi Bencana di Berbagai Daerah</h3>
                            <p>Relawan dari Universitas Negeri Surabaya (UNESA) yang dipimpin oleh SMCC dan UKM Peduli Kemanusiaan 
                                selalu aktif berpartisipasi dalam penanganan bencana di berbagai wilayah. 
                                Dua anggota dari tim relawan berbagi pengalaman mereka dalam acara Sharing Session-Ngobras dengan tema "Peran Relawan 
                                dalam Penanggulangan Bencana" di Studio ULT, Rektorat, Kampus Lidah Wetan, Surabaya.</p>
                            <a href=".html" class="btn">Read More</a>
                        </div>
                    </div>
                </section>
                    </div><!--Akhir Pos Baru-->
                </div><!--Akhir judul berita-->
            </div><!--Akhir hot-->
        </div><!--akhir center-->
    </div><!--akhir hot-->


    <!--html berita terkini-->
    <section class="beritalainnya">
            <div class="Berita">
                <img src="imgBT/futsal.jpg">
                <div class="content">
                    <p> UKM Futsal </p>
                    <p> UKM Futsal Unesa meraih medali emas POMPROV JATIM II 2023. </p>
                </div>
            </div>
            <div class="Berita">
                <img src="imgBT/softball.jpg">
                <div class="content">
                    <p>UKM Softball </p>
                    <p>Atlet UKM Softball Unesa yang berlaga di Piala Walikota Surabaya 2023. </p>
                </div>
            </div>
            <div class="Berita">
                <img src="imgBT/renang.jpg">
                <div class="content">
                    <p> UKM Renang </p>
                    <P> Selamat kepada para pemenang cabang olahraga renang Universitas Negeri Surabaya di POMPROV
                        JATIM II tahun 2023! </P>
                </div>
            </div>
            <div class="Berita">
                <img src="imgBT/atletik.jpg">
                <div class="content">
                    <p>UKM Atletik </p>
                    <p> UKM Atletik UNESA berhasil mendapatkan Juara di Pesta Olahraga Antar Perguruan Tinggi
                        se-Indonesia Ke-II/2023 Universitas Negeri Jakarta. </p>
                </div>
            </div>
            <div class="Berita">
                <img src="imgBT/taekwondo.jpg">
                <div class="content">
                    <p> UKM Taekwondo </p>
                    <p> Kemenangan UKM Taekwondo Universitas Negeri Surabaya Pada Pomprov Jawa Timur 2023. </p>
                </div>
            </div>
            <div class="Berita">
                <img src="imgBT/voli.jpg">
                <div class="content">
                    <p> UKM Voli </p>
                    <p> Selamat untuk tim Bola Voli Putra Unesa atas perolehan juara 1 dan tim Bola Voli Putri Unesa
                        atas perolehan juara 3 di POMPROV JATIM II tahun 2023. </p>
                </div>
            </div>
        </section>
    <!--akhir berita terkini-->

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

</body>

</html>