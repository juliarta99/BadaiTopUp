<?php 
require 'functions.php';

if( isset($_POST["register"])) {

      if( registrasi($_POST) > 0 ){
            echo "<script>
                        alert('user baru berhasil ditambahkan!');
                  </script>";
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
      <title>SignUp Badai TopUp</title>
      <link rel="stylesheet" href="signup.css">
</head>
<body>
      <!-- signup start -->
      <div class="container">
      <div class="signup_title">
            <h1>SIGN UP</h1>
      </div>
      <div class="signup_content">
            <form action="" method="post">
            <input type="text" id="username" class="form_content" name="username" autocomplete="on" placeholder="USERNAME" required >
          
            <input type="password" id="password" class="form_content" name="password" placeholder="PASSWORD" required>
          
            <input type="password" id="password2" class="form_content" name="password2" placeholder="KONFIRMASI PASSWORD" required>

            <input type="hidden" name="email" required>
            <button type="submit" id="submit" name="register" value="SIGNUP">SIGNUP</button>
            <a href="login.php" id="login">Sudah punya akun?</a>
            </form>
      </div>
      </div>
      <!-- signup end -->
</body>
</html>