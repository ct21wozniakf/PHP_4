<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php
include 'menu.php';
?>
<br>
<h1>Strona wylogowania</h1>
<form method="post">
    <input type="submit" name="idziemy_do_domu" value="Wystarczy już tej zabawy &ndash; wyloguj mnie">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    session_unset();

    session_destroy();

}
?>
<?php
include 'print_r.php';
?>
</body>
</html>