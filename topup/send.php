<?php
require "../functions.php";

$pembelian = mysqli_query($conn, 
            "SELECT * FROM pembelian INNER JOIN user ON user.id=pembelian.id_user ORDER BY id_pembelian DESC LIMIT 1");

while($membeli = mysqli_fetch_assoc($pembelian)):
      $atasNama = $membeli["username"];
      $jenisGames = $membeli["jenis"];
      $user_idGame = $membeli["user_id"];
      $usernameGame = $membeli["username_game"];
      $jumlahHarga = $membeli["jumlah_harga"];
      $metode_pembayaranGame = $membeli["pembayaran"];

      $url = "https://api.whatsapp.com/send?phone=+6289605880609&text=Konfirmasi%20order%0AAtas%20nama:%20$atasNama%0APembelian%20diamond%20$jenisGames%0AUser%20ID:%20$user_idGame%0AUsername:%20$usernameGame%0AJumlah/Harga%20DM:%20$jumlahHarga%0AMetode%20pembayaran:%20$metode_pembayaranGame%0AMohon%20diproses%20secepatnya%20Min";
header("Location: $url");

endwhile;
?>