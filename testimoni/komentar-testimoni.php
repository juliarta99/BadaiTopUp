<?php
session_start();
require "../functions.php";

if(!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// id testimoninya
$testimoni = $_GET['id'];

if( isset($_POST["submit"])) {

      $komentar = $_POST["komentar"];
      $id_testimoni = $testimoni;
      $id_user = $_SESSION['user']['id'];

      mysqli_query($conn, "INSERT INTO komentars VALUES('', '$komentar', '$id_testimoni', '$id_user')");
      if( ($_POST) > 0 ){
            echo "<script>
                        alert('komentar berhasil ditambahkan!');
                  </script>";
      }else{
            echo mysqli_error($conn);
      }
}
?>

<!-- query tabel testimoni dengan get id START -->
<?php
      $nama_testis = $conn->query("SELECT * FROM testimoni
      WHERE testimoni.id=$testimoni");
?>
<?php while($nama_testi = $nama_testis->fetch_assoc()): ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Testimoni <?php echo $nama_testi['nama_testimoni']; ?></title>
      <link rel="stylesheet" href="list-testimoni.css">
</head>
<body>
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
      <!-- content start -->
      <div class="testimoni">
            <div class="content">
            <h1 class="title-testimoni">Testimoni <?php echo $nama_testi['nama_testimoni']; ?></h1>
            <div class="content-testimoni">
                  <div class="image-testimoni">
                  <!-- slider -->
                  <div class="slider">
                  <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <!-- slide image -->
                        <div class="slide first">
                              <img src="../img/contoh_testimoni.jpg" alt="">
                        </div>
                        <div class="slide">
                              <img src="../img/contoh_testimoni.jpg" alt="">
                        </div>
                        <div class="slide">
                              <img src="../img/contoh_testimoni.jpg" alt="">
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
                  <script src="../slide.js"></script>
                  <?php endwhile; ?>
                  <!-- query tabel testimoni END -->
                  <!-- slider end -->
                  </div>
                  <div class="komentar-testimoni">
                        <div class="komentarnya">
                        <!-- query untuk isi komentarnya START -->
                        <?php 
                        $komens = $conn->query("SELECT komentars.*, user.username, user.email FROM komentars
                        INNER JOIN user ON user.id=komentars.id_user
                        WHERE id_testimoni=$testimoni");

                        while($komen = $komens->fetch_assoc()):
                        ?>
                        <div class="content-komentar">
                              <img src="//www.gravatar.com/avatar/<?php echo $komen['email']; ?>?s=48&d=monsterid" class="avatar-komentar" alt="">
                              <div class="content-isi">
                                    <h2 class="nama"><?php echo $komen['username']; ?></h2>
                                    <p class="isi-komentar"><?php echo $komen['komentar']; ?></p>
                              </div>
                        </div>
                        <?php endwhile; ?>
                        <!-- query isi END -->
                        </div>
                  </div>
                  <form action="" method="POST">
                        <input type="text" name="komentar" id="komentar" placeholder="CSnya sangat ramah" required>
                        <button type="submit" name="submit"><img src="../img/icon_kirim.png" class="img-kirim" alt="Kirim"></button>
                  </form>
            </div>
            </div>
      </div>
      <!-- content end -->
</body>
</html>
<!-- query testimoni END -->