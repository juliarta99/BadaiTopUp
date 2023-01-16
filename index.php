<?php
session_start();

if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badai Top Up</title>
    <link rel="stylesheet" href="sytle.css">
</head>
<body>
    <!-- nav start -->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=""><img src="img/BadaiTopUp.png" alt="Badai TopUp"></a></div>
            <div class="menu">
                <ul>
                    <li class="nav-link"><a href="#home">Home</a></li>
                    <li class="nav-link"><a href="#games">Games</a></li>
                    <li class="nav-link"><a href="#lainnya">Lainnya</a></li>
                    <li class="nav-link"><a href="testimoni.php">Testimoni</a></li>
                    <li class="nav-link"><a href="#contact">Contact</a></li>
                    <li class="nav-link"><a href="logout.php" class="login" 
                        onclick="return confirm('Apakah anda ingin Logout?');">Logout</a></li>
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

    <!-- home start -->
    <section id="home">
        <div class="container">
            <!-- slider -->
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <!-- slide image -->
                    <div class="slide first">
                        <img src="img/aov_background.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/ml_background.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/freefire_background.jpg" alt="">
                    </div>
                    <!-- slide image end -->
                    <!-- auto -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                    <!-- auto end -->
                </div>
                <!-- manual start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
                <!-- manual end -->
            </div>
            <script src="slide.js"></script>
            <!-- slider end -->
            <div class="deskripsi">
                <h1>Badai TopUp</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi sit doloribus maxime dolorem necessitatibus, sequi molestiae iusto natus, aliquid cum debitis, perferendis pariatur non fugiat dolorum est qui accusamus ea?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veritatis, omnis ea architecto debitis sunt. Minima deserunt, repellendus commodi amet cum, officiis fuga veniam enim nisi non qui incidunt cupiditate.</p>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- top up games -->
    <section id="games">
        <div class="games_title">
            <h2>Top Up Games</h2>
            <div class="underline_games"></div>
        </div>
        <div class="games_content">
            <ul>
                <li class="list_games"><a href="topup/topup-ff.php">
                    <img src="img/freefire.png" class="img_games" alt="Free Fire">
                </a><span class="name_games">Free Fire</span></li>
                <li class="list_games"><a href="topup/topup-ff.php">
                    <img src="img/freefire_max.png" class="img_games" alt="Free Fire">
                </a><span class="name_games">Free Fire Max</span></li>
                <li class="list_games"><a href="topup/topup-pubg.php">
                    <img src="img/pubg.png" class="img_games" alt="PUBG">
                </a><span class="name_games">PUBG</span></li>
                <li class="list_games"><a href="topup/topup-mobileLegends.php">
                    <img src="img/mobile_legends.png" class="img_games" alt="Mobile Legends">
                </a><span class="name_games">Mobile Legends</span></li>
                <li class="list_games"><a href="topup/topup-cod.php">
                    <img src="img/call_of_duty.png" class="img_games" alt="COD">
                </a><span class="name_games">COD</span></li>
                <li class="list_games"><a href="topup/topup-valorant.php">
                    <img src="img/valorant.png" class="img_games" alt="Valorant">
                </a><span class="name_games">Valorant</span></li>
                <li class="list_games"><a href="topup/topup-aov.php">
                    <img src="img/aov.png" class="img_games" alt="AOV">
                </a><span class="name_games">AOV</span></li>
                <li class="list_games"><a href="topup/topup-pb.php">
                    <img src="img/pb.png" class="img_games" alt="PB">
                </a><span class="name_games">Point Blank</span></li>
                <li class="list_games"><a href="topup/topup-apexLegends.php">
                    <img src="img/apex_legends.png" class="img_games" alt="Apex Legends">
                </a><span class="name_games">Apex Legends</span></li>
                <li class="list_games"><a href="topup/topup-genshinImpact.php">
                    <img src="img/genshin_impact.png" class="img_games" alt="Genshin Impact">
                </a><span class="name_games">Genshin Impact</span></li>
                <li class="list_games"><a href="topup/topup-sausageMan.php">
                    <img src="img/sausage_man.png" class="img_games" alt="Sausage Man">
                </a><span class="name_games">Sausage Man</span></li>
            </ul>
        </div>
        <div class="clear"></div>
    </section>
    <!-- top up games END -->

    <!-- top up lainnya -->
    <section id="lainnya">
        <div class="lainnya_title">
            <h2>Top Up Lainnya</h2>
            <div class="underline_lainnya"></div>
        </div>
        <div class="lainnya_content">
            <ul>
                <li class="list_lainnya"><a href="topup/topup-pulsa.php">
                    <img src="img/Pulsa.png" class="img_lainnya" alt="Pulsa Reguler">
                </a><span class="name_lainnya">Pulsa Reguler</span></li>
                <li class="list_lainnya"><a href="topup/topup-eWallet.php">
                    <img src="img/Saldo_E-wallet.png" class="img_lainnya" alt="E-Wallet">
                </a><span class="name_lainnya">Saldo E-Wallet</span></li>
                <li class="list_lainnya"><a href="topup/topup-paket.html">
                    <img src="img/Paket_Internet.png" class="img_lainnya" alt="Paket Internet">
                </a><span class="name_lainnya">Paket Internet</span></li>
                <li class="list_lainnya"><a href="topup/topup-tokenListrik.php">
                    <img src="img/Token_Listrik.png" class="img_lainnya" alt="Token Listrik">
                </a><span class="name_lainnya">Token Listrik</span></li>
                <li class="list_lainnya"><a href="topup/topup-vidio.php">
                    <img src="img/vidio.png" class="img_lainnya" alt="Vidio">
                </a><span class="name_lainnya">Vidio</span></li>
                <li class="list_lainnya"><a href="topup/topup-googlePlay.php">
                    <img src="img/google_play.jpg" class="img_lainnya" alt="Google Play">
                </a><span class="name_lainnya">Google Play</span></li>
            </ul>
        </div>
        <div class="clear"></div>
    </section>
    <!-- top up lainnya END -->

    <!-- alasan START-->
    <section id="alasan">
        <div class="content_alasan">
            <div class="title_alasan">Kenapa kamu harus top up di badai topup</div>
            <div class="isi_alasan">
                <div class="desk_alasan">
                <h1 class="nama_alasan">1. Pengiriman Cepat</h1>
                <p class="deskripsi_alasan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil sint, quod eaque dolorem expedita iusto quibusdam tempora amet eligendi delectus iste accusantium fuga iure? Dolorem reiciendis pariatur facilis quas laborum.</p>
                </div>
                <img src="img/Pengiriman_cepat.png" class="img_alasan" alt="Pengiriman Cepat">
            </div>
            <div class="isi_alasan">
                <div class="desk_alasan">   
                <h1 class="nama_alasan">2. 100% Aman</h1>
                <p class="deskripsi_alasan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil sint, quod eaque dolorem expedita iusto quibusdam tempora amet eligendi delectus iste accusantium fuga iure? Dolorem reiciendis pariatur facilis quas laborum.</p>
                </div>
                <img src="img/100aman.png" class="img_alasan" alt="100% Aman">
            </div>
            <div class="isi_alasan">
                <div class="desk_alasan">
                <h1 class="nama_alasan">3. Harga Murah</h1>
                <p class="deskripsi_alasan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil sint, quod eaque dolorem expedita iusto quibusdam tempora amet eligendi delectus iste accusantium fuga iure? Dolorem reiciendis pariatur facilis quas laborum.</p>
                </div>
                <img src="img/murah.png" class="img_alasan" alt="Harga Murah">
            </div>
            <div class="isi_alasan">
                <div class="desk_alasan">
                <h1 class="nama_alasan">4. Fast Response</h1>
                <p class="deskripsi_alasan">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil sint, quod eaque dolorem expedita iusto quibusdam tempora amet eligendi delectus iste accusantium fuga iure? Dolorem reiciendis pariatur facilis quas laborum.</p>
                </div>
                <img src="img/fast_respon.png" class="img_alasan" alt="Fast Response">
            </div>
        </div>
        <div class="clear"></div>
    </section>
    <!-- alasan END -->

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