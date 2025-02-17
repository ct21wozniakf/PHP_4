<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include 'menu.php'; ?>
<form method="post">

    <label for="login">Login:</label>
    <br>
    <input autofocus id="login" name="login" placeholder="login" required type="text" value="<?= $_POST["login"] ?? '' ?>">
    <br>
    <br>
    <label for="pass">Hasło:</label>
    <br>
    <input required type="password" id="pass" name="pass" placeholder="hasło">
    <br>
    <br>
    <input type="submit" value="Zaloguj">
</form>    

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if ($_POST['login'] === 'Admin' && $_POST['pass'] === 'Admin123')
{ 
    echo '<p>Udane logowanie. Utworzono zmienne sesji.</p>';
    $_SESSION["login"] = $_POST['login'];
    $_SESSION["pass"] = $_POST['pass'];
    $_SESSION["login_status"] = true;
    
}

    else
    { 
        echo '<p> Login i hasło są niepoprawne</p>';
    }
}
?>
<?php 
include 'print_r.php';
?>
</body>
</html>