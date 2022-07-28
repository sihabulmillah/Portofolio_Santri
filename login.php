<?php
session_start();
require 'function.php';
if (isset($_COOKIE['login'])) {
    $_SESSION['login'] = true;
}
if (isset($_SESSION["login"])) {
    header("location:dashboard.php");
    exit;
}

if (isset($_POST['submit'])) {
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($query) == 1) {

        $row = mysqli_fetch_assoc($query);

        if ($password == $row['password']) {
            $_SESSION['login'] = true;


            if (isset($_POST['remember'])) {
                setcookie('login', 'true', time() + 60);
            }
            header("location:dashboard.php");
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
    <title>Login Page</title>
    <link rel="stylesheet" href="css/stylelo.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="right">

            <?php if (isset($error) == true) {
                echo "<div class='error'><p><b>ERROR : </b> The username or password you entered is incorrect.</p></div>";
            }
            ?>

            <div class="login">
                <form action="" method="post">
                    <input type="text" class="username" placeholder="Username" name="username" autocomplete="of" required>
                    <br>
                    <input type="password" class="password" placeholder="Password" name="password" required>
                    <!-- <hr color="#938787"> -->
                    <input type="checkbox" name="remember" class="cek" id="cek"> <label for="cek">Remember Me</label>
                    <button class="submit-button" type="submit" name="submit">Login</button>
                </form>
                <a href="landing.php" class="return"><i class="fa fa-sign-out i"></i> Return</a>
            </div>
        </div>
        <div class="decor">
            <h1>Generasi IX</h1>
            <h2>Create Future Skilled<br>
                Professionals.</h2>
        </div>
    </div>
</body>

</html>