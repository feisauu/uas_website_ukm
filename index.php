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
    <link rel="stylesheet" href="style_beranda.css">
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

<!--beranda section-->
<section class="beranda" id="beranda">
    <div class="content">
        <h3> <span>UKM</span> <br> Universitas Negeri Surabaya <br> </h3>
        <a href="#type" class="btn">Join Now</a>
    </div>
</section>
<!--beranda section-->

<!--about section-->
<section class="about" id="about">
    <h1 class="heading"> Tentang <span> UKM </span></h1>
    <div class="row">
        <div class="image">
            <img src="gambar/expo.png"/> </div>

            <div class="content">
            <h3>Apa itu UKM?</h3>
            <p>Unit Kegiatan Mahasiswa (UKM) adalah organisasi intra Universitas Negeri
                Surabaya di luar organisasi mahasiswa (ormawa) yang berfungsi sebagai wadah
                pengembangan potensi minat, bakat, dan penalaran mahasiswa Universitas Negeri
                Surabaya.</p>
            <a href="profile.php" class="btn">Read More</a>
        </div>
    </div>
</section>
<!--about section-->

<!--type section-->
<section class="type" id="type">
    <h1 class="heading">Our <span> UKM </span></h1>
    <h1 class="font">Bidang Minat dan Bakat</h1>
    <div class="type-slider">
        <div class="slider-controls">
            <img src="gambar/tanda kiri.png" id="back_btn">
            <div class="box-slider-container">
                <div class="box-slider">
                    <img src="gambar/ukwu.png" alt="">
                    <h3>UKM KWU</h3>
                    <div class="price">Unit Kegiatan Kewirausahaan</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pedulik.png" alt="">
                    <h3>UKM Peduli Kemanusiaan</h3>
                    <div class="price">Unit Kegiatan Peduli Kemanusiaan</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/afo.png" alt="">
                    <h3>UKM Fotografi</h3>
                    <div class="price">Unit Kegiatan Aktifitas Fotografi</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka2</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka3</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka4</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
            </div>
            <img src="gambar/tanda kanan.png" id="next_btn">
          </div>
        </div>
    </div>
    <h1 class="font">Bidang Kerohanian</h1>
    <div class="type-slider">
        <div class="slider-controls">
            <img src="gambar/tanda kiri.png" id="back_btn">
              <div class="box-slider-container">
                <div class="box-slider">
                    <img src="gambar/hindu.png" alt="">
                    <h3>UKM UKKH</h3>
                    <div class="price">Unit Kegiatan Kerohanian Hindu</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/pramuka.png" alt="">
                    <h3>UKM Pramuka</h3>
                    <div class="price">Unit Kegiatan Pramuka</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/kristen.png" alt="">
                    <h3>UKM UKKKP</h3>
                    <div class="price">Unit Kerohanian Kristen Protestan</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/mtq.png" alt="">
                    <h3>UKM MTQ</h3>
                    <div class="price">Unit Kegiatan Musabaqoh Tilawatil Qur'an</div>
                    <a href="#" class="btn">Join</a>
                </div>
                <div class="box-slider">
                    <img src="gambar/ukki.png" alt="">
                    <h3>UKM UKKI</h3>
                    <div class="price">Unit Kegiatan Kerohanian Islam</div>
                    <a href="#" class="btn">Join</a>
                </div>
            </div>
        <img src="gambar/tanda kanan.png" id="next_btn">
      </div>
    </div>
</div>
    <h1 class="font">Bidang Olahraga dan Bela Diri</h1>
        <div class="type-slider">
            <div class="slider-controls">
                <img src="gambar/tanda kiri.png" id="back_btn">
                  <div class="box-slider-container">
                    <div class="box-slider">
                        <img src="gambar/basket.png" alt="">
                        <h3>UKM Basketball</h3>
                        <div class="price">Unit Kegiatan Bola Basket</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                    <div class="box-slider">
                        <img src="gambar/perisai.png" alt="">
                        <h3>UKM Perisai Diri</h3>
                        <div class="price">Unit Kegiatan Perisai Diri</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                    <div class="box-slider">
                        <img src="gambar/taekwondo.png" alt="">
                        <h3>UKM Taekwon-do</h3>
                        <div class="price">Unit Kegiatan Taekwon-do</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                    <div class="box-slider">
                        <img src="gambar/cricket.png" alt="">
                        <h3>UKM Cricket</h3>
                        <div class="price">Unit Kegiatan Cricket</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                    <div class="box-slider">
                        <img src="gambar/pramuka.png" alt="">
                        <h3>UKM Pramuka</h3>
                        <div class="price">Unit Kegiatan Pramuka</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                    <div class="box-slider">
                        <img src="gambar/pramuka.png" alt="">
                        <h3>UKM Pramuka</h3>
                        <div class="price">Unit Kegiatan Pramuka</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                    <div class="box-slider">
                        <img src="gambar/pramuka.png" alt="">
                        <h3>UKM Pramuka</h3>
                        <div class="price">Unit Kegiatan Pramuka</div>
                        <a href="#" class="btn">Join</a>
                    </div>
                </div>
            <img src="gambar/tanda kanan.png" id="next_btn">
         </div>
        </div>
    </div>
</section>
<!--type section-->

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