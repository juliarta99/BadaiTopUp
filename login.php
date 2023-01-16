<?php
session_start();
// cek sudah login belum
if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require "functions.php";

if(isset ($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION['user'] = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
            );
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Badai TopUp</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- login start -->
    <div class="container">
        <div class="login_title">
            <h1>Login</h1>
        </div>
        <div class="login_content">
            <form action="" method="post">
                <!-- username atau password salah -->
                <?php if( isset($error)): ?>
                    <?= "<script>
                            alert('USERNAME ATAU PASSWORD SALAH!');
                        </script>" ?>
                <?php endif; ?>
                <!-- username atau password salah END-->
            <input type="text" id="username" class="form_content" name="username" autocomplete="on" placeholder="USERNAME" required >
            
            <input type="password" id="password" class="form_content" name="password" placeholder="PASSWORD" required >

            <button type="submit" id="submit" name="login" value="LOGIN">LOGIN</button>
            <a href="register.php" id="signup">Belum punya akun?</a>
            </form>
        </div>
    </div>
    <!-- login end -->
</body>
</html>