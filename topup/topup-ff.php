<?php
session_start();
require "../functions.php";

if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

$diamond = mysqli_query($conn, "SELECT * FROM freefire");
$pembayaran = mysqli_query($conn, "SELECT * FROM pembayaran");

// $atasNama = mysqli_query($conn, 
//             "SELECT pembelian.*, user.username FROM pembelian INNER JOIN user ON user.id=pembelian.id_user");


// nama games
$nama_games = "Free Fire";

if(isset ($_POST["submit"])){

      $user = $_SESSION["user"]["id"];
      $tgl_pembelian = date("y-m-d");
      $user_id = $_POST["userid"];
      $username = $_POST["username_game"];
      $jenis = $nama_games;
      $jumlahHarga_dm = $_POST["jumlahHarga"];
      $metode_pembayaran = $_POST["metode"];

      mysqli_query($conn, "INSERT INTO pembelian 
      VALUES('', '$user', '$tgl_pembelian', '$user_id', '$username', '$jenis', '$jumlahHarga_dm', '$metode_pembayaran')");

      if( ($_POST) > 0 ){
            echo '<script>
                        alert("Order berhasil dibuat!!\nKonfirmasi untuk melanjutnya pembelian!!");
                        window.location.href="topup-ff.php";
                        window.location.href="send.php";
                  </script>';
      }else{
            echo mysqli_error($conn);
      }
}     
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Top UP di Skensa TopUp</title>
      <link rel="stylesheet" href="../pembelian.css">
</head>
<body class="freefire">
      <!-- nav start -->
    <nav>
      <div class="wrapper">
          <div class="logo"><a href=""><img src="../img/BadaiTopUp.png" alt="Badai TopUp"></a></div>
          <div class="menu">
              <ul>
                  <li class="nav-link"><a href="../index.php#home">Home</a></li>
                  <li class="nav-link"><a href="../index.php#games">Games</a></li>
                  <li class="nav-link"><a href="../index.php#lainnya">Lainnya</a></li>
                  <li class="nav-link"><a href="../testimoni.php">Testimoni</a></li>
                  <li class="nav-link"><a href="../index.php#contact">Contact</a></li>
                  <li class="nav-link"><a href="../logout.php" class="login" 
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
  <script src="../humberger.js"></script>
  <!-- nav end -->

      <!-- buy start -->
      <div class="buy">
            <div class="buy_title">
                  <a href="" class="nama"><?= $nama_games; ?></a>
            </div>
            <div class="buy_content">
                  <form action="" method="post">
                        <label for="userid" class="title-id">Masukkan User ID :</label>
                        <input type="text" class="userid" id="userid" name="userid" autofocus placeholder="972974186" required>

                        <label for="username_game" class="title-id">Masukkan Username :</label>
                        <input type="text" class="userid" id="username_game" name="username_game"  placeholder="YogikFF" required>

                        <!-- pilih jumlah START -->
                        <div class="title-beli">Silahkan Pilih:</div>

                        <div class="beli">
                        <?php $x = 1; ?>
                        <?php while($beli = mysqli_fetch_assoc($diamond)): ?>
                              <input type="radio" name="jumlahHarga" class="buy_now" id="<?= $x ?>" 
                                    value="<?php echo $beli["jumlah"] ." / ". $beli["harga"]; ?>" required>
                              <label for="<?= $x ?>" class="lbl-radio">
                                    <div class="display-box">
                                          <div class="jumlah"><?php echo $beli["jumlah"]; ?></div>
                                          <div class="harga"><?= $beli["harga"] ?></div>
                                    </div>
                              </label>
                        <?php $x++; ?>
                        <?php endwhile; ?>
                        </div>
                        <!-- pilih jumlah END -->
                        
                        <!-- pilih pembayaran START -->
                        <div class="title-pembayaran">Pilih Pembayaran:</div>

                        <div class="pembayaran">
                        <?php $y = 99; ?>
                        <?php while($bayar = mysqli_fetch_assoc($pembayaran)): ?>
                              <input type="radio" name="metode" class="pembayaran_now" id="<?= $y ?>" 
                                    value="<?php echo $bayar["nama"]; ?>" required>
                              <label for="<?= $y ?>" class="lbl-radio">
                                    <div class="display-box">
                                          <img src="../img/<?= $bayar["img"]; ?>" class="img_pembayaran" alt="indomaret">
                                          <div class="nama_pembayaran"><?= $bayar["nama"]; ?></div>
                                    </div>
                              </label>
                        <?php $y++; ?>
                        <?php endwhile; ?>
                        </div>
                        <!-- pilih pembayaran END -->

                        <a href=""><button type="submit" id="submit" name="submit">Beli</button></a>
                  </form>
            </div>
      </div>
</body>
</html>