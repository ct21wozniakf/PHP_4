<?php
session_start() 
?>
<?php $success = false;
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = $_POST['nazwa'];
    $value = $_POST['value'];
    $expire = intval($_POST['czas']);
    $success = setcookie($name, $value, time() + $expire , "/");
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dla zalogowanych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'menu.php' ?>
<h1 style="font-family:'Courier New', Courier, monospace">Strona administracyjna</h1>
<?= $success ? '<div><mark>Ciasteczko zostało ustawione </mark></div>' : ''?>
<div>Ustaw ciasteczko</div>
<?php if ($_SESSION['login_status'] === true)
{
    ?>
          <form method="post">
        <div>
        <label for="nazwa">Nazwa ciasteczka<span style="color: red;">*</span>:</label>
        <input type="text" name="nazwa" id="nazwa" required>
        </div>
        <div>
        <label for="value">Wartość:</label>
        <input type="text" name="value" id="value">
        </div>
        <div>
        <label for="czas">Data wygaśnięcia:</label>
        <input type="number" name="czas" id="czas">
        </div>
        <div>
            <button onclick="window.location.reload()">Odśwież</button>
        </div>
        <div>
        <input type="submit" value="Ustaw">
        </div>
          </form>

        
<?php } else { 
 echo "Musisz być zalogowany, aby ustawić ciasteczko!";
} ?>
<hr>
<pre>$_COOKIE
    <?php print_r($_COOKIE);?>
</pre>
<?php include 'stopka.php'; ?>
</body>
</html>