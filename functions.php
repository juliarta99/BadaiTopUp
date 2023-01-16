<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "topup");

// registrasi
function registrasi($data) {
      global $conn;

      $username = stripslashes($data["username"]);
      $password = mysqli_real_escape_string($conn, $data["password"]);
      $password2 = mysqli_real_escape_string($conn, $data["password2"]);

      // cek konfirmasi pass
      if( $password !== $password2 ) {
            echo "<script>
                        alert('Konfirmasi password tidak sesuai!');
                  </script>";
            return false;
      }

      // cek username apakah sudah ada
      $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
      if(mysqli_fetch_assoc($result) ) {
            echo "<script>
                        alert('Username sudah ada!');
                  </script>";
            return false;
      }

      // enkripsi pass
      $password = password_hash($password, PASSWORD_DEFAULT);

      // insert data user ke dalam database
      mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$username@example.com')");

      return mysqli_affected_rows($conn);
}
?>