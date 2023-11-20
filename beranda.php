<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vacansheesh - Website of Indonesia Tourism</title>
    <link rel="stylesheet" href="style.css" />

    <!-- icon to browser tab -->
    <link rel="shortcut icon" href="images/vacansheesh.png" />

    <!-- Boxicons -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- header -->
    <header>
      <a href="#" class="logo">Vacansheesh</a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#destinasi">Destinasi</a></li>
        <li><a href="./tentang.html">Tentang</a></li>
        <li><a href="#login">Login</a></li>
      </ul>
    </header>

    <!-- Bagian beranda -->
    <section class="beranda" id="beranda">
      <!-- image slider start -->
      <div class="slider">
        <div class="slides">
          <!-- radio button start -->
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
          <!-- radio button end -->
          <!-- slides images start -->
          <div class="slide first">
            <img src="images/banyuwangi.jpg" alt="banyuwangi" />
          </div>
          <div class="slide">
            <img src="images/bromo.jpg" alt="bromo" />
          </div>
          <div class="slide">
            <img src="images/prambanan.jpg" alt="prambanan" />
          </div>
          <!-- slides images end -->
          <!-- automatic navigation start -->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
          </div>
          <!-- automatic navigation end -->
        </div>
        <!-- manual navigation start -->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>
        <!-- manual navigation end -->
      </div>
      <!-- image slider end -->
    </section>

    <!-- container -->
    <section class="container">
      <div class="text">
        <h2>
          Awali Liburan Anda <br />
          dengan Banyak Layanan!
        </h2>
      </div>

      <div class="row-items">
        <div class="container-box">
          <div class="container-img">
            <img src="images/travel.png" alt="" />
          </div>
          <h4>Flight Services</h4>
          <p>Arrival and Departure</p>
        </div>

        <div class="container-box">
          <div class="container-img">
            <img src="images/food.png" alt="" />
          </div>
          <h4>Food Services</h4>
          <p>Catering</p>
        </div>

        <div class="container-box">
          <div class="container-img">
            <img src="images/travel_service.png" alt="" />
          </div>
          <h4>Travel Services</h4>
          <p>Pick-up/drop</p>
        </div>

        <div class="container-box">
          <div class="container-img">
            <img src="images/hotel_service.png" alt="" />
          </div>
          <h4>Hotel Services</h4>
          <p>Check-in/out</p>
        </div>
      </div>
    </section>

    <!-- Bagian Destinasi -->
    <?php
        $result = mysqli_query($conn, "SELECT b.*, k.nama_kategori FROM berita b join kategori k on (b.id_kategori=k.id_kategori) ORDER BY b.id_berita DESC");
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
    ?>
    <section class="destinasi" id="destinasi">
      <div class="title">
        <h2>Destinasi Populer Kami</h2>
      </div>

      <!-- Filter Buttons -->
      <div class="filter_buttons">
        <a href="./destinasi.html" class="active" data-name="semua">
          <button>
            <ul class="navbar">
              <li>Semua</li>
            </ul>
          </button>
        </a>
        <button data-name="sumatera">Sumatera</button>
        <button data-name="sulawesi">Sulawesi</button>
        <button data-name="jawa">Jawa</button>
        <button data-name="kalimantan">Kalimantan</button>
      </div>

      <!-- images card -->
      <div class="destination-content">
        <div class="col-content" data-name="sumatera">
          <img src="images/ampera.jpg" alt="" />
          <h5>Jembatan Ampera</h5>
          <p>Sumatera</p>
        </div>

        <div class="col-content" data-name="sulawesi">
          <img src="images/bunaken.jpg" alt="" />
          <h5>Pulau Bunaken</h5>
          <p>Sulawesi</p>
        </div>

        <div class="col-content" data-name="jawa">
          <img src="images/kebun_raya.jpg" alt="" />
          <h5>Kebun Raya Bogor</h5>
          <p>Jawa</p>
        </div>

        <div class="col-content" data-name="jawa">
          <img src="images/lawang_sewu.jpg" alt="" />
          <h5>Lawang Sewu</h5>
          <p>Jawa</p>
        </div>

        <div class="col-content" data-name="sumatera">
          <img src="images/masjid.jpg" alt="" />
          <h5>Masjid Raya Sumatera Barat</h5>
          <p>Sumatera</p>
        </div>

        <div class="col-content" data-name="kalimantan">
          <img src="images/pasar_terapung.jpg" alt="" />
          <h5>Pasar Terapung Banjarmasin</h5>
          <p>Kalimantan</p>
        </div>

        <div class="col-content" data-name="kalimantan">
          <img src="images/rimpi.jpg" alt="" />
          <h5>Bukit Rimpi</h5>
          <p>Kalimantan</p>
        </div>

        <div class="col-content" data-name="sumatera">
          <img src="images/toba.jpg" alt="" />
          <h5>Danau Toba</h5>
          <p>Sumatera</p>
        </div>

        <div class="col-content" data-name="sulawesi">
          <img src="images/toraja.jpg" alt="" />
          <h5>Tana Toraja</h5>
          <p>Sulawesi</p>
        </div>
      </div>

    </section>
    <?php
        }
    ?>
    <!-- Footer -->
    <section class="footer">
      <div class="foot">
        <div class="footer-content">
          <div class="footlinks">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="./login.html">Login</a></li>
              <li><a href="./tentang.html">Tentang Kami</a></li>
              <li><a href="./beranda.html">Beranda</a></li>
            </ul>
          </div>

          <div class="footlinks">
            <h4>Connect</h4>
            <div class="social">
              <a href="" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="" target="_blank"><i class="bx bxl-linkedin"></i></a>
              <a href="" target="_blank"><i class="bx bxl-youtube"></i></a>
              <a href="" target="_blank"><i class="bx bxl-github"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="end">
        <p>
          Copyright © 2023 Vacansheesh All Rights Reserved.<br />Website
          developed by: Syahid Abdul Azis
        </p>
      </div>
    </section>

    <!-- link to JS -->
    <script src="script.js"></script>
  </body>
</html>
