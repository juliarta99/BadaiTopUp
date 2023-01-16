<?php
session_start();
require "functions.php";

if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$testimonis = mysqli_query($conn, "SELECT * FROM testimoni");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Testimoni Badai Top Up</title>
      <link rel="stylesheet" href="testimoni.css">
</head>
<body>
      <!-- nav start -->
      <nav>
            <div class="wrapper">
                  <div class="logo"><a href=""><img src="img/BadaiTopUp.png" alt="Badai TopUp"></a></div>
                  <div class="menu">
                  <ul>
                        <li class="nav-link"><a href="index.php#home">Home</a></li>
                        <li class="nav-link"><a href="index.php#games">Games</a></li>
                        <li class="nav-link"><a href="index.php#lainnya">Lainnya</a></li>
                        <li class="nav-link"><a href="testimoni.php">Testimoni</a></li>
                        <li class="nav-link"><a href="index.php#contact">Contact</a></li>
                        <li class="nav-link"><a href="logout.php" class="login"
                              onclick="return confirm('Apakah anda ingin logout?');">Logout</a></li>
                  </ul>
                  </div>
                  <div class="humberger">
                  <span></span>
                  <span></span>
                  <span></span>   
                  </div>
            </div>
      </nav>
      <script src="humberger.js"></script>
      <!-- nav end -->

      <!-- content start -->
      <div class="testimoni">
            <h1 class="title_testimoni">Testimoni</h1>
            <div class="content_testimoni">
                  <?php while($testimoni = mysqli_fetch_assoc($testimonis)): ?>
                  <div class="isi_testimoni">
                        <a href="testimoni/komentar-testimoni.php?id=<?= $testimoni['id'] ?>">
                        <img src="img/<?= $testimoni['img_testimoni']; ?>" class="img_testimoni" alt="">
                        <span class="selengkapnya">Klik untuk melihat lebih lengkap</span>
                        <h2 class="nama_testimoni"><?= $testimoni['nama_testimoni']; ?></h2>
                        </a>
                  </div>
                  <?php endwhile; ?>
            </div>
      </div>
      <!-- content end -->

      <!-- footer start -->
    <footer id="contact">
        <div class="footer_content">
            <a href="cara-topup.php"><i>Cara Top Up di Badai Top Up</i></a>
            <h3>Contact</h3>
            <div class="social_media">
                <ul>
                    <li class="social_content"><a href=""><img src="img/youtube.png" class="img_social" alt="youtube"></a></li>
                    <li class="social_content"><a href=""><img src="img/facebook.png" class="img_social" alt="facebook"></a></li>
                    <li class="social_content"><a href=""><img src="img/tiktok.png" class="img_social" alt="tik-tok"></a></li>
                    <li class="social_content"><a href=""><img src="img/instagram.png" class="img_social" alt="instagram"></a></li>
                    <li class="social_content"><a href=""><img src="img/whatsapp.png" class="img_social" alt="whatsapp"></a></li>
                </ul>
            </div>
            <i class="alamat">Jln. Raya Sempidi, Gg. Larosa, No. 49</i>
            <div class="copyright">
                &copy; 2022 <b>BADAI TOP UP</b> All Rights Reserverd.
            </div>
        </div>
    </footer>
</body>
</html>