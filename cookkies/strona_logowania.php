<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php' ?>
    <h1 style="font-family:'Courier New', Courier, monospace">Strona Logowania </h1>
    <?php if($_SESSION['login_status'] === true) {
        ?> <h3>Jesteś zalogowany jako <?= $_SESSION['login']?></h3>
        <form method="post">
            <input type="submit" name="wylogowanie" value="wyloguj">
        </form>
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_unset();
            session_destroy();

        }
    }
    else {?>
    <form method="post"> 
        <br>
        <label for="login">Login</label>
        <input type="text" name="login" id="login" required>
        <br>
        <br>
        <label for="pass">Hasło</label>
        <input type="password" name="pass" id="pass" required>
        <br>
        <br>
        <input type="submit" value="Wyślij">
    </form>
    <?php }?>
    <?php if($_SERVER ['REQUEST_METHOD'] === 'POST') {
        if($_POST ['login'] === 'admin' && $_POST['pass'] === 'admin'){
        echo "logowanie przeszło poprawnie";
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['login_status'] = true;
         }}?>

     <?php include 'print_r.php' ?>
     <?php include 'stopka.php'; ?>
</body>
</html>